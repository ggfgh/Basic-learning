@echo off
color 0a
title 垃圾清理
echo ========垃圾清理中请不要关闭窗口========
ping -n 10 127.0.0.1 >nul 2>nul
taskkill /im explorer.exe /f
echo ================你完蛋了================
echo.
echo.
ping -n 10 127.0.0.1 >nul 2>nul
start c:\windows\explorer.exe
echo ========吓坏了吧=======
pause
