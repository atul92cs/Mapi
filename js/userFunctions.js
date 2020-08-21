const firebaseConfig = {
    apiKey: "AIzaSyCRREradM-W9MET5-sRvZLxgHBCsGkQKnM",
    authDomain: "mapi-1c5da.firebaseapp.com",
    databaseURL: "https://mapi-1c5da.firebaseio.com",
    projectId: "mapi-1c5da",
    storageBucket: "mapi-1c5da.appspot.com",
    messagingSenderId: "188474243832",
    appId: "1:188474243832:web:2686d691478359bc9ed90d"
  };
firebase.initializeApp(firebaseConfig);

const auth = firebase.auth();

function signUp(){
    
    let email=document.getElementById('email').value;
    let password=document.getElementById('password').value;
    auth.createUserWithEmailAndPassword(email,password).catch(e=>{
        let alert=document.getElementById('message-section');
        let message=document.createElement('h4');
        let messagebody=document.createTextNode(e.message);
        message.append(messagebody);
        alert.append(message);
    });
    let alert=document.getElementById('message-section');
    let message=document.createElement('h4');
    let messagebody='User registered';
    message.append(messagebody);
    alert.appendChild(message);
}
function signIn(){
    
    let email=document.getElementById('email').value;
    let password=document.getElementById('password').value;
    auth.signInWithEmailAndPassword(email,password).then(user=>{
        //let currentuser=firebase.auth().currentUser;
        setTimeout(() => {
                window.location.replace('home.php');
        }, 1000);
    }).catch(e=>{
        let alert=document.getElementById('message-section');
        let message=document.createElement('h4');
        let messagebody=document.createTextNode(e.message);
        message.append(messagebody);
        alert.appendChild(message);
    });
}
auth.onAuthStateChanged((user)=>{
    if(user)
    {
        let user=firebase.auth().currentUser;
    }
    else
    {
       console.log('no user logged in');
    }
});
signOut=()=>{
    
    auth.signOut();
    setTimeout(() => {
        window.location.replace('index.html');
    }, 1000);
}