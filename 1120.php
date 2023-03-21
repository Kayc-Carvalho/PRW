#include <iostream>
#include <cstring>
using namespace std;
int main(int argc, char** argv) {
	string numero;
	int x;
	char tecla = x;
	int auxImp;
		while(tecla != '0'){
		
		cin>>tecla;
		cin>>numero;
		if(tecla == '0' && numero[00] == '0'){
			break;
		}
		auxImp = 0;
		for(x=0;x<numero.length();x++){
			if(tecla != numero[x]){
				if(numero[x] != '0'){
					cout<<numero[x];
					auxImp = 1;
				}
				else {
					if (auxImp == 1){
						cout<<numero[x];
						cout<<endl;
					}
				}
			}
		}
		cout<<endl;
	}
	return 0;
}