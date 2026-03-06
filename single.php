<?php include __DIR__."/header.php"; ?>
<section class="bg-white min-h-screen pb-32">
    <div class="relative max-w-7xl mx-auto lg:px-8 lg:pt-8">
        <div class="relative h-[400px] md:h-[600px] w-full overflow-hidden lg:rounded-[3rem] shadow-2xl">
            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200" 
                 class="w-full h-full object-cover" alt="Biyi Luxury Estate">
            
            <div class="absolute top-6 left-6 flex gap-2">
                <button class="bg-white/90 backdrop-blur px-4 py-2 rounded-xl text-xs font-black shadow-lg">
                    <i class="fa-solid fa-camera mr-2"></i> 1/12 PHOTOS
                </button>
            </div>

            <div class="absolute inset-0 flex items-center justify-center bg-black/20 hover:bg-black/40 transition-all group">
                <button class="bg-gold-500 text-white px-8 py-4 rounded-2xl font-black shadow-2xl shadow-gold-500/50 flex items-center gap-3 transform group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-vr-cardboard text-2xl"></i>
                    LAUNCH 360° VIRTUAL TOUR
                </button>
            </div>
            
            <div class="absolute bottom-6 right-6 bg-white px-4 py-2 rounded-xl shadow-lg border border-gold-100 flex items-center gap-2">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-ping"></span>
                <span class="text-[10px] font-black uppercase text-dark">Verified by Biyi</span>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-12 grid grid-cols-1 lg:grid-cols-3 gap-12">
        
        <div class="lg:col-span-2">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-4xl font-black text-dark tracking-tighter">The Biyi Diamond Penthouse</h1>
                    <p class="text-gray-500 flex items-center gap-2 mt-2">
                        <i class="fa-solid fa-location-dot text-gold-500"></i> Victoria Island, Lagos
                    </p>
                </div>
                <div class="bg-gold-50 px-6 py-4 rounded-3xl border border-gold-100">
                    <span class="text-xs font-bold text-gold-600 block uppercase mb-1 tracking-widest">Annual Rent</span>
                    <span class="text-3xl font-black text-dark tracking-tighter">₦8,500,000</span>
                </div>
            </div>

            <div class="flex flex-wrap gap-8 py-8 border-y border-gray-100 mb-8">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center text-gold-500 text-xl"><i class="fa-solid fa-bed"></i></div>
                    <div><p class="text-[10px] font-bold text-gray-400 uppercase">Bedrooms</p><p class="font-black">4 En-suite</p></div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center text-gold-500 text-xl"><i class="fa-solid fa-bath"></i></div>
                    <div><p class="text-[10px] font-bold text-gray-400 uppercase">Bathrooms</p><p class="font-black">5 Baths</p></div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center text-gold-500 text-xl"><i class="fa-solid fa-bolt"></i></div>
                    <div><p class="text-[10px] font-bold text-gray-400 uppercase">Utilities</p><p class="font-black">24/7 Power</p></div>
                </div>
            </div>

            <div class="prose prose-gold">
                <h3 class="text-xl font-black mb-4">About this Property</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    This masterpiece offers unparalleled views of the Atlantic. Designed for those seeking a **Dream Housing** experience, it features smart home automation, a private elevator, and a gourmet kitchen. 
                    Best of all, you can view every corner via our Virtual Tour before scheduling a physical inspection.
                </p>
                
                <div class="bg-zinc-900 rounded-[2rem] p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="text-gold-500 font-black flex items-center gap-2 mb-2">
                            <i class="fa-solid fa-shield-halved"></i> NO EXCESS CHARGES
                        </h4>
                        <p class="text-gray-400 text-sm">We believe in total transparency. The price listed is the price you pay. No administrative secrets, no hidden agent "development" fees.</p>
                    </div>
                    <i class="fa-solid fa-handshake-angle absolute -right-4 -bottom-4 text-7xl text-white/5"></i>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="gold-gradient rounded-[2rem] p-8 text-white shadow-xl shadow-gold-200">
                <p class="text-[10px] font-black uppercase tracking-widest text-white/80">Referral Reward</p>
                <h4 class="text-xl font-black mt-1 mb-4 leading-tight">Know someone who would love this house?</h4>
                <p class="text-sm opacity-90 mb-6">Refer them to Biyi Estate Management and get your **₦40,000.00** win token instantly.</p>
                <button class="w-full bg-white text-gold-700 font-black py-4 rounded-2xl hover:bg-gold-50 transition-colors shadow-lg">
                    <i class="fa-solid fa-share-nodes mr-2"></i> SHARE & EARN
                </button>
            </div>

            <div class="bg-white border border-gray-100 rounded-[2rem] p-8 shadow-sm">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 bg-gray-200 rounded-full overflow-hidden">
                        <img src="https://i.pravatar.cc/100?u=biyi" alt="Agent">
                    </div>
                    <div>
                        <h5 class="font-black text-dark">Biyi Support</h5>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-tighter">Professional Consultant</p>
                    </div>
                </div>
                <button class="w-full border-2 border-dark text-dark font-black py-4 rounded-2xl hover:bg-dark hover:text-white transition-all mb-4">
                    Schedule Inspection
                </button>
                <p class="text-[10px] text-center text-gray-400">Response time: &lt; 5 minutes</p>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 left-0 right-0 glass px-6 py-4 border-t border-gray-100 flex items-center justify-between lg:justify-center lg:gap-8 z-[100]">
        <div class="hidden sm:block">
            <span class="text-[10px] font-black text-gray-400 uppercase block">Ready to move in?</span>
            <span class="text-xl font-black text-dark tracking-tighter">₦8,500,000<span class="text-sm text-gray-400 font-normal italic">/yr</span></span>
        </div>
        <a href="https://wa.me/2348000000000?text=I%20am%20interested%20in%20the%20Biyi%20Diamond%20Penthouse" 
           class="flex-1 max-w-sm bg-[#25D366] text-white py-4 rounded-2xl font-black text-center shadow-xl shadow-green-200 flex items-center justify-center gap-3">
            <i class="fa-brands fa-whatsapp text-2xl"></i> BOOK VIA WHATSAPP
        </a>
    </div>
</section>
<?php  include __DIR__."/footer.php"; ?>