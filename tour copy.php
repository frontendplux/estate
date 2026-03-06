
<?php include __DIR__."/header.php"; ?>
<section class="min-h-screen bg-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 border-b border-gray-100 pb-8">
            <div>
                <h1 class="text-4xl font-black text-dark tracking-tighter uppercase">Tour <span class="text-gold-500">History</span></h1>
                <p class="text-gray-500 font-medium mt-2">Revisit your virtual walkthroughs and make your final choice.</p>
            </div>
            <div class="flex items-center gap-2 text-[10px] font-black uppercase text-gold-600 bg-gold-50 px-4 py-2 rounded-full">
                <i class="fa-solid fa-vr-cardboard"></i>
                <span>12 Total Tours</span>
            </div>
        </div>

        <div class="relative space-y-8 before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-gray-100 before:to-transparent">
            
            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-gold-500 text-white shadow shadow-gold-200 shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="w-[calc(100%-4rem)] md:w-[45%] bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <time class="text-[10px] font-black text-gold-600 uppercase">Today, 10:45 AM</time>
                        <span class="bg-dark text-white text-[9px] font-black px-2 py-1 rounded">Luxury</span>
                    </div>
                    <div class="relative h-32 rounded-2xl overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=600" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="bg-white/90 backdrop-blur w-10 h-10 rounded-full text-dark flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-play ml-1"></i>
                            </button>
                        </div>
                    </div>
                    <h3 class="font-black text-dark text-lg mb-1">Biyi Gold Mansion</h3>
                    <p class="text-gray-400 text-xs mb-4">Duration: 12 mins • 8 Rooms Viewed</p>
                    <div class="flex gap-2">
                        <a href="https://wa.me/2348000000000?text=I%20just%20finished%20the%20VR%20tour%20for%20Gold%20Mansion" 
                           class="flex-1 bg-[#25D366] text-white py-3 rounded-xl font-black text-[10px] uppercase text-center">
                            Chat Agent
                        </a>
                        <button class="px-4 bg-gray-50 rounded-xl hover:bg-gold-500 hover:text-white transition-all">
                            <i class="fa-solid fa-rotate-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-gray-200 text-gray-400 shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="w-[calc(100%-4rem)] md:w-[45%] bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm opacity-80 hover:opacity-100 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <time class="text-[10px] font-black text-gray-400 uppercase">Yesterday</time>
                        <span class="bg-green-100 text-green-700 text-[9px] font-black px-2 py-1 rounded">Budget</span>
                    </div>
                    <div class="relative h-32 rounded-2xl overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600" class="w-full h-full object-cover grayscale">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="bg-white/90 w-10 h-10 rounded-full text-dark flex items-center justify-center">
                                <i class="fa-solid fa-play ml-1"></i>
                            </button>
                        </div>
                    </div>
                    <h3 class="font-black text-dark text-lg mb-1">Smart Studio B1</h3>
                    <p class="text-gray-400 text-xs mb-4">Duration: 4 mins • 2 Rooms Viewed</p>
                    <div class="flex gap-2">
                        <a href="https://wa.me/2348000000000" class="flex-1 bg-[#25D366] text-white py-3 rounded-xl font-black text-[10px] uppercase text-center">
                            Chat Agent
                        </a>
                        <button class="px-4 bg-gray-50 rounded-xl hover:bg-gold-500 hover:text-white transition-all">
                            <i class="fa-solid fa-rotate-right"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-20 bg-dark rounded-[3rem] p-10 text-white relative overflow-hidden text-center">
            <h2 class="text-2xl font-black mb-4">Can't decide on a house?</h2>
            <p class="text-gray-400 text-sm mb-8 max-w-md mx-auto">Refer any of these houses to a friend. If they rent it, you earn your **₦40,000.00** win token instantly!</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-gold-500 text-white px-10 py-4 rounded-2xl font-black uppercase tracking-widest text-xs">Share My History</button>
                <a href="https://wa.me/2348000000000" class="bg-white/10 backdrop-blur border border-white/20 px-10 py-4 rounded-2xl font-black uppercase tracking-widest text-xs">Ask for Advice</a>
            </div>
            <i class="fa-solid fa-vr-cardboard absolute -left-10 -bottom-10 text-[200px] text-white/5 -rotate-12"></i>
        </div>
    </div>
</section>

<?php include __DIR__."/footer.php"; ?>