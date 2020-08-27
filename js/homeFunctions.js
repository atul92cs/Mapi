 let day=new Date().getDate();
 let month=new Date().getMonth();
 let year=new Date().getFullYear();
 let date=day+'-'+month+'-'+year;
let rootRef=firebase.database().ref('/user');
rootRef.orderByKey().equalTo(date).on('value',snapshot=>{
  console.log(snapshot.val());
});