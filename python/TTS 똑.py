import discord, asyncio, os
from discord.ext import commands

game = discord.Game("관리")
bot = commands.Bot(command_prefix='', status=discord.Status.online, activity=game)




bot.run('ODk3MzQ1MjQ2MjY5MTQ1MTA4.YWUT4g.fd3ItvscQU6NlaRZ1kbivwfAQYQ')