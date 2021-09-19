import tweepy as tw
import json_helper
import firebase_admin
from firebase_admin import credentials, firestore

consumer_api_key = "TWITTER_CONSUMER_API_KEY"
consumer_api_key_secret = "TWITTER_CONSUMER_API_KEY_SECRET"
access_token = "TWITTER_ACCESS_TOKEN"
access_token_secret = "TWITTER_ACCESS_TOKEN_SECRET"

cred = credentials.Certificate('FIREBASE_AUTH_FILE')
firebase_admin.initialize_app(cred,
                              {
                                  'databaseURL': 'FIREBASE_URL_TO_DATABASE'
                              })
db = firestore.client()
doc_ref = db.collection(u'FIREBASE_COLLECTION')

auth = tw.OAuthHandler(consumer_api_key, consumer_api_key_secret)
auth.set_access_token(access_token, access_token_secret)
api = tw.API(auth, wait_on_rate_limit=True)

search_words = "KEYWORD"
date_since = "DATE(DD-MM-YYYY)"

tweets = tw.Cursor(api.search,
                   q=search_words,
                   lang="en",
                   since=date_since).items(2000)

for tweet in tweets:
    json_tweet = {
        "tweet": tweet.text,
        "user": {
            "name": tweet.user.name,
            "screen_name": tweet.user.screen_name,
            "location": tweet.user.location,
            "description": tweet.user.description,
            "verified": tweet.user.verified,
            "followers_count": tweet.user.followers_count,
            "friends_count": tweet.user.friends_count,
            "listed_count": tweet.user.listed_count,
            "created_at": tweet.user.created_at
        },
        "hashtags": tweet.entities,
        "all_data": tweet,
        "created_at": tweet.created_at,
    }

    # doc_ref.document('twitter1').collection('test1').add({
    #    "tweet": tweet.text,
    #    "user": {
    #        "name": tweet.user.name,
    #        "screen_name": tweet.user.screen_name,
    #        "location": tweet.user.location,
    #        "description": tweet.user.description,
    #        "verified": tweet.user.verified,
    #        "followers_count": tweet.user.followers_count,
    #        "friends_count": tweet.user.friends_count,
    #        "listed_count": tweet.user.listed_count,
    #        "created_at": tweet.user.created_at
    #    },
    #    "hashtags": tweet.entities,
    #    "created_at": tweet.created_at,
    # })

    json_helper.write_tweets(json_tweet)
