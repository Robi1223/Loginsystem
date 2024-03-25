import asyncio
from twscrape import API, gather

async def main():
    api = API()

    
    await api.pool.add_account("@RobiFrank", "Harriet1meissy", "frankrobi1223@gmail.com", "Humberger")

    
    await api.pool.login_all()
    
    start_date = "2024-01-01"
    end_date = "2024-03-31"

    
    search_results = await gather(api.search(f"from:UEFA since:{start_date} until:{end_date}", limit=20))

    
    with open("tweets2.csv", "w", newline='', encoding="utf-8") as csvfile:
        csvfile.write("Tweet ID,Username,Content\n")
        for tweet in search_results:
            tweet_id = tweet.id
            username = tweet.user.username
            content = tweet.rawContent.replace(",", "")  
            csvfile.write(f"{tweet_id},{username},{content}\n")

if __name__ == "__main__":
    asyncio.run(main())




