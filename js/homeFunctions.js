 generateCollection=(yesterday,today,daybyesterday)=>{
  let myChart=document.getElementById('survey-form').getContext('2d');

  Chart.defaults.global.defaultFontFamily = 'Lato';
  Chart.defaults.global.defaultFontSize = 18;
  Chart.defaults.global.defaultFontColor = '#777';
  
let surveyChart=new Chart(myChart,{
type:'bar',
data:{
  labels:['today','yesterday','day before yesterday'],
  datasets:[{
    label:'people',
    data:[
      today,
      yesterday,
      daybyesterday
    ],
    backgroundColor:[
      'rgba(255, 99, 132, 0.6)',
      'rgba(255, 99, 132, 0.6)',
      'rgba(255, 99, 132, 0.6)'
    ],
    borderWidth:1,
    borderColor:'#777',
    hoverBorderWidth:3,
    hoverBorderColor:'#000'
}]
},
options:{
  title:{
    display:true,
    text:'Last 3 days survey completed',
    fontSize:25
  },
  legend:{
    display:true,
    position:'right',
    labels:{
      fontColor:'#000'
    }
  },
  layout:{
    padding:{
      left:50,
      right:0,
      bottom:0,
      top:0
    }
  },
  tooltips:{
    enabled:true
  }
}
});
 }
 
 
 
 
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
let collection=[];
rootRef.orderByChild('date').equalTo(dateyest).on('value',snapshot=>{
  
   collection.push(snapshot.numChildren());
});
rootRef.orderByChild('date').equalTo(datebyest).on('value',snapshot=>{
 
  collection.push(snapshot.numChildren());
});
rootRef.orderByChild('date').equalTo(date).on('value',snapshot=>{
  
   collection.push(snapshot.numChildren());
});
console.log(collection.toString());

generateCollection(collection[0],collection[1],collection[2]);
