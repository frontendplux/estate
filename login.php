<?php 
require __DIR__.'/conn.php';
require __DIR__.'/class.php';
$db = new Database();
$conn = $db->connect();

$main = new Main($conn);

$error = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email_or_phone = $_POST['email_or_phone'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = $main->login($email_or_phone, $password);

    if($login['status']){
        header("Location: dashboard.php");
        exit;
    }else{
        $error = $login['message'];
    }
}
include 'header.php';
?>
<!-- Firebase App (required) -->
<script src="https://www.gstatic.com/firebasejs/10.6.0/firebase-app-compat.js"></script>
<!-- Firebase Auth -->
<script src="https://www.gstatic.com/firebasejs/10.6.0/firebase-auth-compat.js"></script>

<section class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
<div class="max-w-md w-full">

<div class="text-center mb-10">
<div class="inline-flex items-center justify-center w-16 h-16 bg-gold-500 rounded-2xl shadow-xl text-white mb-4">
<i class="fa-solid fa-house-lock text-3xl"></i>
</div>

<h1 class="text-3xl font-black text-dark tracking-tighter">Welcome Back</h1>
<p class="text-gray-400 mt-2 font-medium">Log in to manage your dream housing</p>
</div>


<div class="bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-10 border border-gray-100">
   <div class="bg-gold-50 border border-gold-100 rounded-2xl p-4 mb-8 flex items-center gap-4">
                <div class="text-gold-600 animate-pulse">
                    <i class="fa-solid fa-coins text-xl"></i>
                </div>
                <p class="text-[11px] font-bold text-gold-800 leading-tight uppercase tracking-wider">
                    Check your dashboard for your <br> ₦40,000.00 referral tokens!
                </p>
            </div>
<?php if($error): ?>
<div class="bg-red-100 text-red-700 p-3 rounded-xl text-sm mb-6">
<?= htmlspecialchars($error) ?>
</div>
<?php endif; ?>


<form method="POST" class="space-y-6">

<div>
<label class="block text-[10px] font-black uppercase text-gray-400 mb-2 ml-1">
Email or Phone
</label>

<div class="relative">
<i class="fa-solid fa-envelope-open absolute left-5 top-1/2 -translate-y-1/2 text-gray-300"></i>

<input 
type="text"
name="email_or_phone"
required
placeholder="name@email.com or phone"
class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-14 pr-4 focus:ring-2 focus:ring-gold-500 text-sm font-medium">
</div>
</div>



<div>

<div class="flex justify-between items-center mb-2 ml-1">

<label class="block text-[10px] font-black uppercase text-gray-400">
Password
</label>

<a href="#" class="text-[10px] font-black uppercase text-gold-600">
Forgot?
</a>

</div>

<div class="relative">
<i class="fa-solid fa-shield-halved absolute left-5 top-1/2 -translate-y-1/2 text-gray-300"></i>

<input 
type="password"
name="password"
required
placeholder="••••••••"
class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-14 pr-4 focus:ring-2 focus:ring-gold-500 text-sm font-medium">
</div>

</div>



<div class="flex items-center ml-1">
<input type="checkbox" name="remember" class="w-4 h-4 text-gold-500 border-gray-300 rounded">
<label class="ml-2 text-xs font-bold text-gray-500">
Stay logged in
</label>
</div>



<button type="submit" 
class="w-full bg-dark text-white py-5 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-gold-600 transition-all">

Access Portal

</button>

</form>
     <div class="mt-8 pt-8 border-t border-gray-50 text-center">
                <p class="text-[10px] font-black uppercase text-gray-300 tracking-[0.2em] mb-4">Or Connect With</p>
                <div class="flex justify-center gap-4">
                    <button  id="googleSignUpBtn" class="w-12 h-12 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 hover:text-blue-600 transition-all border border-transparent hover:border-blue-100">
                        <i class="fa-brands fa-google text-lg"></i>
                    </button>
                    <button class="w-12 h-12 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 hover:text-blue-800 transition-all border border-transparent hover:border-blue-100">
                        <i class="fa-brands fa-facebook-f text-lg"></i>
                    </button>
                </div>
            </div>
</div>


<p class="text-center mt-8 text-sm text-gray-500">
Don't have an account? 
<a href="register.php" class="text-gold-600 font-black hover:underline">
Create one now
</a>
</p>

<div class="mt-12 text-center">
            <a href="https://wa.me/2348000000000" class="inline-flex items-center gap-2 text-[#25D366] font-bold text-xs uppercase tracking-tighter hover:opacity-80 transition-opacity">
                <i class="fa-brands fa-whatsapp text-lg"></i> Need help logging in? Chat with us
            </a>
        </div>
</div>
</section>
<script>
    // Firebase Config (Unified)
    const firebaseConfig = {
        apiKey: "AIzaSyAUaUezJ3wHfMcmWijG7uGi6deimQZ9Ftw",
        authDomain: "biyi-homes.firebaseapp.com",
        projectId: "biyi-homes",
        storageBucket: "biyi-homes.appspot.com",
        messagingSenderId: "124536411509",
        appId: "1:124536411509:web:768e270890e3f0e10b2f3c"
    };

    firebase.initializeApp(firebaseConfig);
    const auth = firebase.auth();

    // Google Sign-In Logic
    document.getElementById('googleSignUpBtn').addEventListener('click', () => {
        const provider = new firebase.auth.GoogleAuthProvider();

        auth.signInWithPopup(provider)
        .then((result) => {
            const user = result.user;
            
            // Sending to your PHP backend
            fetch('auth/firebase_google.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    uid: user.uid,
                    email: user.email,
                    fullname: user.displayName
                })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status){
                    window.location.href = 'dashboard.php';
                } else {
                    alert(data.message || "Authentication failed");
                }
            });
        })
        .catch((error) => {
            console.error(error);
            alert("Google connection failed. Please try again.");
        });
    });
</script>
<?php include 'footer.php'; ?>