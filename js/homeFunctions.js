 let day=new Date().getDate();
 let month=new Date().getMonth();
 let year=new Date().getFullYear();
 let date=day+'-'+month+'-'+year;
 let yesterday=new Date().getDate()-1;
 let month2=new Date().getMonth()+1;
 let dayyest=new Date().getDate()-2;
 let dateyest=yesterday+'-'+month2+'-'+year;
 let datebyest=dayyest+'-'+month2+'-'+year;
 console.log(datebyest);
let rootRef=firebase.database().ref('/user');
rootRef.orderByChild('date').equalTo(dateyest).on('value',snapshot=>{
  console.log(snapshot.numChildren());
});