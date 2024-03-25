import argparse
import asyncio
import warnings
from twscrape import API, gather
import logging


logging.basicConfig(level=logging.WARNING)


class TwitterLogin:
    def __init__(self, username, password):
        self.username = username
        self.password = password

    def login(self):
        # Add your account setup and login logic here
        # For demonstration purposes, let's assume successful login
        print(f"Logged in as {self.username}")

async def main():
    parser = argparse.ArgumentParser(description="Twitter Search")
    parser.add_argument("topic", help="Topic to search for")
    parser.add_argument("start_date", help="Start date (YYYY-MM-DD)")
    parser.add_argument("end_date", help="End date (YYYY-MM-DD)")

    args = parser.parse_args()
    topic = args.topic
    start_date = args.start_date
    end_date = args.end_date

    # Create a TwitterLogin instance (replace with actual credentials)
    login = TwitterLogin(username="@RobiFrank", password="Harriet1meissy")

    api = API()

    try:
        # Add your account setup and login logic here
        await api.pool.add_account(login.username, login.password, "frankrobi1223@gmail.com", "Humberger")
        await api.pool.login_all()

    except warnings.Warning as warning:
        print(f"Warning: {warning}")

    search_results = await gather(api.search(f"from:{topic} since:{start_date} until:{end_date}", limit=20))

    print(f"Number of search results: {len(search_results)}")

    if search_results:
        with open(f"{topic}_tweets.csv", "w", newline='', encoding="utf-8") as csvfile:
            csvfile.write("Tweet ID,Username,Content\n")
            for tweet in search_results:
                tweet_id = tweet.id
                username = tweet.user.username
                content = tweet.rawContent.replace(",", "")
                csvfile.write(f"{tweet_id},{username},{content}\n")
        print("CSV file created successfully.")
    else:
        print("No search results found.")

if __name__ == "__main__":
    asyncio.run(main())
