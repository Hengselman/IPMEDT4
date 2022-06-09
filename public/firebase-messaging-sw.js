importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
   
firebase.initializeApp({
    apiKey: "AIzaSyA3r472eGELenIsHFSI0yWEst8MgM34iXw",
    projectId: "ipmedt4---beweegminuut",
    messagingSenderId: "343314335987",
    appId: "1:343314335987:web:4b19050b93d8055749cf86",
});
  
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});