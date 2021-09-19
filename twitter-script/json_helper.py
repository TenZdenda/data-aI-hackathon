import json


def write_tweets(json_ride):
    data = read_tweets()

    data.append(json_ride)

    with open('data.json', 'w') as file:
        json.dump(data, file, indent=4, sort_keys=True, default=str)


def read_tweets():
    with open('data.json') as file:
        data = json.load(file)
    return data
