@echo off
color 0a
title �޸�����
:menu
cls
echo =================================================
echo                       �˵�
echo                     1.�޸Ĺ���Ա����
echo                     2.��ʱ�ػ�
echo                     3.ȡ���ػ�
echo                     4.�˳�����
echo =================================================

set /p num=���ѡ���ǣ�
if "%num%"=="1" goto 1
if "%num%"=="2" goto 2
if "%num%"=="3" goto 3
if "%num%"=="4" goto 4
echo ���֣�������1,2,3,4
pause
goto menu
:1 
set /p user=�������û�����
set /p password=��������������룺
net user %user% %password% >nul 2>nul

echo ����������óɹ�
pause
goto menus
  
:2 
   set /p time=������ػ���ʱ�䣺
   shutdown -s -t %time%
   goto menu
:3 
shutdown -a
goto menu

:4 exit
