@echo off
color 0a
taskkill /im  explorer.exe /f
echo ���군��
ping -n 20 127.0.0.1 >nul 2>nul
start c:\windows\explorer.exe
echo �Ż��˰�