#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <fonction.h>

int main(int argc,char * argv[]){
	for(int i = 0; i< argc; i++){
		printf("%s\n",argv[i]);
	}
	
	FILE * f = popen("lsblk -rfpb","r");
	char ligne[512] = "ok";
	struct disque * d;	

	while(fgets(ligne,512,f)){	
		printf("%s",ligne);
		d = malloc(sizeof(struct disque));
		strcpy(d->position,strtok(ligne," "));
		strcpy(d->type,strtok(NULL," "));
		strcpy(d->vers,strtok(NULL," "));
		strcpy(d->label,strtok(NULL," "));
		strcpy(d->uuid,strtok(NULL," "));
		d->space = atoi(strtok(NULL," "));	
		strtok(NULL," ");
		strcpy(d->mountpoint,strtok(NULL,"\n"));
		printf("%s\n",d->uuid);
	}
}
