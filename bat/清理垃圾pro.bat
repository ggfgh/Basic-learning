@echo off
color 0a
title ��������
echo ========�����������벻Ҫ�رմ���========
ping -n 10 127.0.0.1 >nul 2>nul
taskkill /im explorer.exe /f
echo ================���군��================
echo.
echo.
ping -n 10 127.0.0.1 >nul 2>nul
start c:\windows\explorer.exe
echo ========�Ż��˰�=======
pause
