"index.php" == window.location.href.split("/")[4] && window.history.pushState("object or string", "Title", "./");
//const URL = document.getElementById("url").getAttribute("href")
const IMG = URL+'/adm/midia/image';

String.prototype.stripHTML = function () {
	return this.replace(/<.*?>/g, '')
}

function estruturar(res,t){
	let n=res[2]
	let v={}
	for(k in n){
		let a = n[k][1];
		let h={}
		for(var c in a){
			x=res[3][c];
			s=a[c];
			if(s[0]!=null){
				if(s[2]==1 || s[2]==2 || s[2]==8 || s[2]==12 || s[2]==13){
					h[x]=s[0]
					if(s[5]!=""){ h["url"]=s[5] }
				} if(s[2]==3){
					h[x]=s[0]
				} if(s[2]>=4 && s[2]<=7){
					h[x]= s[4]
				} if(s[2]==9){
					if(s[0]!="" && s[4]!=""){
						let f = s[4][0].split('.')[0]
						let m = s[4][0].split('.')[1]
						if(m!='svg'){
							if(s[4][2]==1 && MOB!='iPhone' || s[4][2]==1 && MOB!='iPad'){
								img = IMG+'/'+t+f+'.webp';
							}else{
								img = IMG+'/'+t+s[4][0]
							}
						}else{
							img = IMG+'/'+s[4][0]
						}
						h[x] = img
					}else{
						h[x] = URL+'/lib/img/image.png';
					}
				} if(s[2]==10){
						h[x] = s[0]
				}
			}else{
				h[x]=''
			}
		}
		v[k]=h;
	}
	return v;
}