#include <stdio.h>
#include <windows.h>
int main()
{
	//·���������\HKEY_CURRENT_USER\SOFTWARE\Microsoft\Windows\CurrentVersion\Run
	//��ע��� 
	HKEY hKey;
	RegOpenKeyEx(HKEY_CURRENT_USER, L"SOFTWARE\\Microsoft\\Windows\\CurrentVersion\\Run", 0, KEY_ALL_ACCESS, &hKey);

	//�Զ���ȡ����·��
	TCHAR szInfo[260];
	GetModuleFileName(NULL, szInfo, 260);

	//��ע�����д������
	/*TCHAR szInfo[260] = L"D:\\Tencent\\QQ\\Bin\\QQScLauncher.exe";*/
	RegSetValueEx(hKey,//ע�����
		L"null",//ע����
		0,//����������Ϊ0
		REG_SZ,//���ݵ����ͣ��ַ��������ͣ�SZ
		(BYTE*)szInfo,//д��ע������Ϣ
		260);//д��ע�������ݴ�С
	//��������

	/*printf("������������");
	getchar();*/
	return 0;
}
