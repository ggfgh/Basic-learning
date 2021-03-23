@echo off
color 0a
title 修改密码
:menu
cls
echo =================================================
echo                       菜单
echo                     1.修改管理员密码
echo                     2.定时关机
echo                     3.退出程序
echo                     4.取消关机
echo =================================================

set /p num=你的选择是：
if "%num%"=="1" goto 1
if "%num%"=="2" goto 2
if "%num%"=="3" goto 3
echo 别闹！请输入1,2,3,4
pause
goto menu
:1 
set /p user=请输入用户名：
set /p password=请输入你的新密码：
net user %user% %password% >nul 2>nul

echo 你的密码设置成功
pause
goto menus
  
:2 
   set /p time=请输入关机的时间：
   shutdown -s -t %time%
   goto menu

:3 exit

