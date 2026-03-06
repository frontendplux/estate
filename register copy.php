
<?php
session_start();
require __DIR__.'/conn.php';
require __DIR__.'../class.php';

// Connect to database
$db = new Database();
$conn = $db->connect();

// Initialize your Main class
$main = new Main($conn);

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request");
}

// Collect form data
$fullname       = $_POST['fullname'] ?? '';
$email          = $_POST['email'] ?? '';
$phone          = $_POST['phone'] ?? '';
$password       = $_POST['password'] ?? '';
$country_code   = $_POST['country_code'] ?? '+234';
$referral_code  = $_POST['referral_code'] ?? null;

// Call your register function
$response = $main->register($fullname, $email, $phone, $password, $country_code, $referral_code);

// Handle response
if ($response['status']) {
    // Registration successful, redirect to dashboard
    header("Location: /dashboard.php");
    exit;
} else {
    // Registration failed, show message
    $error = $response['message'];
}

?>
<?php include 'header.php'; ?>
        <section class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl w-full bg-white rounded-[3rem] shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-gray-100">
        
        <div class="lg:w-1/2 gold-gradient p-12 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-gold-600">
                        <i class="fa-solid fa-house-chimney text-xl"></i>
                    </div>
                    <span class="font-black text-2xl tracking-tighter">BIYI <span class="text-white/80">ESTATE</span></span>
                </div>
                
                <h2 class="text-4xl font-black leading-tight mb-6">Start Your Journey <br> To a Dream Home.</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-2 rounded-lg"><i class="fa-solid fa-check"></i></div>
                        <p class="text-sm font-medium">Access "See Before Inspection" Virtual Tours</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-2 rounded-lg"><i class="fa-solid fa-check"></i></div>
                        <p class="text-sm font-medium">Strict Zero Excess Charges Policy</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-2 rounded-lg"><i class="fa-solid fa-check"></i></div>
                        <p class="text-sm font-medium">Luxury & Budget Friendly Options</p>
                    </div>
                </div>
            </div>

            <div class="relative z-10 bg-black/20 backdrop-blur-md p-6 rounded-2xl border border-white/10 mt-12">
                <p class="text-xs font-bold uppercase tracking-widest text-gold-200">Join & Earn</p>
                <p class="text-lg font-bold">Get your unique link and win up to <span class="text-gold-300 font-black">₦40,000.00</span> today!</p>
            </div>

            <i class="fa-solid fa-key absolute -right-10 -bottom-10 text-[200px] text-white/10 -rotate-12"></i>
        </div>

        <div class="lg:w-1/2 p-8 md:p-16">
            <div class="text-center lg:text-left mb-10">
                <h1 class="text-3xl font-black text-dark tracking-tight">Create Account</h1>
                <p class="text-gray-400 mt-2">Already have an account? <a href="#" class="text-gold-600 font-bold">Sign In</a></p>
            </div>

            <form action="/auth/auth.php" method="POST" class="space-y-5">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2 ml-1">Full Name</label>
                    <div class="relative">
                        <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        <input type="text" placeholder="John Doe"  name="fullname" required minlength="3"
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-gold-500 transition-all text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2 ml-1">Email Address</label>
                    <div class="relative">
                        <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        <input type="email" placeholder="john@example.com" name="email" required
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-gold-500 transition-all text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2 ml-1">Phone Number</label>
                    <div class="relative flex">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold text-sm">+234</span>
                        <input type="tel" placeholder="803 000 0000" name="phone" required pattern="[0-9]{10,11}"
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-16 pr-4 focus:ring-2 focus:ring-gold-500 transition-all text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-2 ml-1">Password</label>
                    <div class="relative">
                        <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        <input type="password" placeholder="••••••••"  required minlength="6" name="password"
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-gold-500 transition-all text-sm">
                    </div>
                </div>
<input type="hidden" name="country_code" value="+234">
                <div class="pt-2">
                    <label class="block text-[10px] font-black uppercase text-gold-600 mb-2 ml-1">Have a Referral Code? (Optional)</label>
                    <input type="text" placeholder="BIYI-XXXX" name="referral_code"
                    class="w-full bg-gold-50/50 border border-gold-100 rounded-2xl py-3 px-4 focus:ring-2 focus:ring-gold-500 transition-all text-sm">
                </div>

                <button type="submit" class="w-full bg-dark text-white py-5 rounded-2xl font-black uppercase tracking-widest text-sm hover:bg-gold-600 shadow-xl shadow-gold-100 transition-all mt-6">
                    Create Account
                </button>

                <p class="text-[10px] text-center text-gray-400 mt-6 px-4 leading-relaxed">
                    By signing up, you agree to Biyi Estate Management's 
                    <a href="#" class="underline">Terms of Service</a> and 
                    <a href="#" class="underline">Privacy Policy</a>. No excess charges guaranteed.
                </p>
            </form>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>