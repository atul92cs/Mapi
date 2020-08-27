let rootRef=firebase.database().ref('/user');
rootRef.orderByKey().on('value',snapshot=>{
  console.log(snapshot.val());
});