 let day=new Date().getDate();
 let month=new Date().getMonth();
 let year=new Date().getFullYear();
 let date=day+'-'+month+'-'+year;
 let yesterday=new Date().getDate()-1;
 let month2=new Date().getMonth()+1;
 let dayyest=new Date().getDate()-2;
 let dateyest=yesterday+'-'+month2+'-'+year;
 let datebyest=dayyest+'-'+month2+'-'+year;
let rootRef=firebase.database().ref('/user');
let yestcollection;
let byestcollection;
let todaycollection;
rootRef.orderByChild('date').equalTo(dateyest).on('value',snapshot=>{
   yestcollection=snapshot.numChildren();
});
rootRef.orderByChild('date').equalTo(datebyest).on('value',snapshot=>{
    byestcollection=snapshot.numChildren();
});
rootRef.orderByChild('date').equalTo(date).on('value',snapshot=>{
    todaycollection=snapshot.numChildren();
});
let myChart=document.getElementById('survey-form').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';
let surveyChart=new Chart(myChart,{
  type:'bar',
  data:{
    labels:['today','yesterday','day before yesterday'],
    data:[
      todaycollection,
      yestcollection,
      byestcollection
    ]
  }
});
