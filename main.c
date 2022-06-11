#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//lsblk -f pour récuperer les infos sur les disks et l'UUID

int main(int argc,char * argv[]){
	for(int i = 0; i< argc; i++){
		printf("%s\n",argv[i]);
	}
	
	FILE * f = popen("lsblk -f","r");
	char ligne[512] = "ok";

	while(fgets(ligne,512,f)){	
		printf("%s\n",ligne);
	}
}
