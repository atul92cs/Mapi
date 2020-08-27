
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
        let currentuser=firebase.auth().currentUser;
        let uid;
        if(user!=null)
        {
            uid=user.uid;

        }
         
        
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
