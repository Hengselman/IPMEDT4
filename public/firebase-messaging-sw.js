// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyA3r472eGELenIsHFSI0yWEst8MgM34iXw",
  authDomain: "ipmedt4---beweegminuut.firebaseapp.com",
  databaseURL: "https://ipmedt4---beweegminuut-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "ipmedt4---beweegminuut",
  storageBucket: "ipmedt4---beweegminuut.appspot.com",
  messagingSenderId: "343314335987",
  appId: "1:343314335987:web:4b19050b93d8055749cf86",
  measurementId: "G-7N63EWC686"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});