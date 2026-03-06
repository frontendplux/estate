<?php include 'header.php'; ?>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
            <div class="lg:col-span-2 gold-gradient rounded-[2.5rem] p-8 md:p-12 text-white relative overflow-hidden shadow-2xl shadow-gold-200">
                <div class="relative z-10 max-w-lg">
                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        Active Rewards
                    </div>
                    <h1 class="text-4xl md:text-5xl font-black mb-4">Refer & Win <br> <span class="text-white/90 italic">₦40,000.00</span></h1>
                    <p class="text-gold-50 text-lg mb-8 opacity-90">Your network is your net worth. Get a win token for every successful tenant you refer today!</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-gold-700 font-bold px-8 py-4 rounded-2xl shadow-xl hover:scale-105 transition-all">Get Referral Link</button>
                        <button class="bg-black/20 backdrop-blur-md text-white border border-white/30 font-bold px-8 py-4 rounded-2xl hover:bg-white/10">Learn More</button>
                    </div>
                </div>
                <i class="fa-solid fa-coins absolute -right-10 -bottom-10 text-[250px] text-white/10 rotate-12"></i>
            </div>

            <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-xl flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Find Your Dream House</h2>
                    <p class="text-gray-500 text-sm mb-6">Filter through expensive or cheaper apartments tailored for you.</p>
                    
                    <div class="space-y-4">
                        <div class="relative">
                            <i class="fa-solid fa-location-dot absolute left-4 top-4 text-gold-500"></i>
                            <input type="text" placeholder="Preferred Location" class="w-full bg-gray-50 border-none rounded-xl py-3.5 pl-12 pr-4 focus:ring-2 focus:ring-gold-500">
                        </div>
                        <div class="relative">
                            <i class="fa-solid fa-tags absolute left-4 top-4 text-gold-500"></i>
                            <select class="w-full bg-gray-50 border-none rounded-xl py-3.5 pl-12 pr-4 focus:ring-2 focus:ring-gold-500 appearance-none">
                                <option>Price Range</option>
                                <option>Budget (Cheaper)</option>
                                <option>Luxury (Expensive)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="w-full bg-dark text-white py-4 rounded-2xl font-bold mt-6 hover:bg-gold-600 transition-all">Search Available Homes</button>
            </div>
        </div>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-white">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
        <div>
            <span class="text-gold-600 font-bold uppercase tracking-widest text-sm">Our Collections</span>
            <h2 class="text-3xl md:text-4xl font-black text-dark mt-2">Available Properties</h2>
            <p class="text-gray-500 mt-2">Find your dream home with zero excess charges.</p>
        </div>
        
        <div class="flex bg-gray-100 p-1.5 rounded-2xl">
            <button class="px-6 py-2.5 bg-white shadow-sm rounded-xl font-bold text-sm text-dark transition-all">All</button>
            <button class="px-6 py-2.5 rounded-xl font-bold text-sm text-gray-500 hover:text-gold-600 transition-all">Expensive</button>
            <button class="px-6 py-2.5 rounded-xl font-bold text-sm text-gray-500 hover:text-gold-600 transition-all">Cheaper</button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="absolute top-5 left-5 z-10 bg-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full flex items-center gap-2 border border-white/20">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                SEE BEFORE INSPECTION
            </div>
            
            <div class="relative h-72 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800" alt="Luxury Mansion" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                    <button class="w-full bg-gold-500 text-white font-bold py-3 rounded-xl transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        Take Virtual Tour
                    </button>
                </div>
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-dark group-hover:text-gold-600 transition-colors">Biyi Gold Mansion</h3>
                        <p class="text-gray-400 text-sm flex items-center mt-1">
                            <i class="fa-solid fa-location-dot mr-2"></i> Banana Island, Lagos
                        </p>
                    </div>
                    <span class="bg-gold-50 text-gold-700 text-xs font-black px-3 py-1 rounded-lg uppercase">Expensive</span>
                </div>
                
                <div class="flex items-center gap-4 py-4 border-y border-gray-50 mb-6">
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bed text-gold-500"></i> 5 Beds</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bath text-gold-500"></i> 4 Baths</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-expand text-gold-500"></i> 1,200 sqft</span>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-gray-400 text-xs block">Annual Rent</span>
                        <span class="text-2xl font-black text-dark">₦15,000,000</span>
                    </div>
                    <button class="bg-dark text-white p-4 rounded-2xl hover:bg-gold-600 transition-all">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="absolute top-5 left-5 z-10 bg-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full flex items-center gap-2 border border-white/20">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                SEE BEFORE INSPECTION
            </div>
            
            <div class="relative h-72 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800" alt="Affordable Apartment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                    <button class="w-full bg-gold-500 text-white font-bold py-3 rounded-xl transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        Take Virtual Tour
                    </button>
                </div>
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-dark group-hover:text-gold-600 transition-colors">Biyi Smart Studio</h3>
                        <p class="text-gray-400 text-sm flex items-center mt-1">
                            <i class="fa-solid fa-location-dot mr-2"></i> Yaba, Lagos
                        </p>
                    </div>
                    <span class="bg-green-50 text-green-700 text-xs font-black px-3 py-1 rounded-lg uppercase">Cheaper</span>
                </div>
                
                <div class="flex items-center gap-4 py-4 border-y border-gray-50 mb-6">
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bed text-gold-500"></i> 1 Bed</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bath text-gold-500"></i> 1 Bath</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-expand text-gold-500"></i> 450 sqft</span>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-gray-400 text-xs block">Annual Rent</span>
                        <span class="text-2xl font-black text-dark">₦850,000</span>
                    </div>
                    <button class="bg-dark text-white p-4 rounded-2xl hover:bg-gold-600 transition-all">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="group relative bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="absolute top-5 left-5 z-10 bg-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-4 py-2 rounded-full flex items-center gap-2 border border-white/20">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                SEE BEFORE INSPECTION
            </div>
            
            <div class="relative h-72 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=800" alt="Modern Dream" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                    <button class="w-full bg-gold-500 text-white font-bold py-3 rounded-xl transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        Take Virtual Tour
                    </button>
                </div>
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-dark group-hover:text-gold-600 transition-colors">Biyi Urban Loft</h3>
                        <p class="text-gray-400 text-sm flex items-center mt-1">
                            <i class="fa-solid fa-location-dot mr-2"></i> Lekki Phase 1, Lagos
                        </p>
                    </div>
                    <span class="bg-gold-50 text-gold-700 text-xs font-black px-3 py-1 rounded-lg uppercase">Dream Housing</span>
                </div>
                
                <div class="flex items-center gap-4 py-4 border-y border-gray-50 mb-6">
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bed text-gold-500"></i> 3 Beds</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-bath text-gold-500"></i> 3 Baths</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1"><i class="fa-solid fa-expand text-gold-500"></i> 900 sqft</span>
                </div>

                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-gray-400 text-xs block">Annual Rent</span>
                        <span class="text-2xl font-black text-dark">₦4,500,000</span>
                    </div>
                    <button class="bg-dark text-white p-4 rounded-2xl hover:bg-gold-600 transition-all">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-white my-16">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
        <div class="max-w-2xl">
            <h2 class="text-3xl md:text-5xl font-black text-dark tracking-tighter">
                Discover Your <span class="text-gold-500 underline decoration-gold-200">Dream Housing</span>
            </h2>
            <p class="text-gray-500 mt-4 text-lg">
                Transparent listings with <span class="font-bold text-dark">Zero Excess Charges</span>. Experience our properties digitally before you step out.
            </p>
        </div>
        
        <div class="flex bg-gray-100 p-1 rounded-2xl self-start">
            <button class="px-5 py-2 bg-white shadow-sm rounded-xl font-bold text-xs uppercase tracking-tighter">All Units</button>
            <button class="px-5 py-2 rounded-xl font-bold text-xs text-gray-400 uppercase tracking-tighter hover:text-gold-600">Luxury</button>
            <button class="px-5 py-2 rounded-xl font-bold text-xs text-gray-400 uppercase tracking-tighter hover:text-gold-600">Budget</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">
        
        <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="relative h-80 overflow-hidden">
                <div class="absolute top-4 left-4 z-20 bg-dark/90 backdrop-blur-md text-gold-400 text-[10px] font-black px-3 py-1.5 rounded-lg border border-gold-500/30">
                    PREMIUM LISTING
                </div>
                
                <div class="absolute inset-0 z-10 bg-dark/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6 text-center">
                    <button class="bg-white text-dark font-black px-6 py-3 rounded-xl shadow-xl flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <i class="fa-solid fa-vr-cardboard text-gold-500"></i> START VIRTUAL TOUR
                    </button>
                </div>
                
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start">
                    <h3 class="text-2xl font-black text-dark tracking-tight">The Biyi Heights</h3>
                    <span class="text-gold-600 font-bold">₦12M/yr</span>
                </div>
                <p class="text-gray-400 text-sm mt-1 mb-6 flex items-center gap-1">
                    <i class="fa-solid fa-location-dot"></i> Ikoyi, Lagos
                </p>
                
                <div class="grid grid-cols-3 gap-4 py-4 border-t border-gray-50">
                    <div class="text-center">
                        <i class="fa-solid fa-bed text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">5 Beds</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-bath text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">4 Baths</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-shield text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">No Fees</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="relative h-80 overflow-hidden">
                <div class="absolute top-4 left-4 z-20 bg-green-600 text-white text-[10px] font-black px-3 py-1.5 rounded-lg">
                    BEST VALUE
                </div>
                
                <div class="absolute inset-0 z-10 bg-dark/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <button class="bg-white text-dark font-black px-6 py-3 rounded-xl shadow-xl flex items-center gap-2">
                        <i class="fa-solid fa-vr-cardboard text-gold-500"></i> VIEW ROOMS
                    </button>
                </div>
                
                <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start">
                    <h3 class="text-2xl font-black text-dark tracking-tight">Smart Studio B1</h3>
                    <span class="text-green-600 font-bold">₦450k/yr</span>
                </div>
                <p class="text-gray-400 text-sm mt-1 mb-6 flex items-center gap-1">
                    <i class="fa-solid fa-location-dot"></i> Surulere, Lagos
                </p>
                
                <div class="grid grid-cols-3 gap-4 py-4 border-t border-gray-50">
                    <div class="text-center">
                        <i class="fa-solid fa-bed text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">1 Bed</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-shower text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">1 Bath</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-check-double text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">Verified</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
            <div class="relative h-80 overflow-hidden">
                <div class="absolute top-4 left-4 z-20 bg-gold-500 text-white text-[10px] font-black px-3 py-1.5 rounded-lg">
                    POPULAR CHOICE
                </div>
                
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?auto=format&fit=crop&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start">
                    <h3 class="text-2xl font-black text-dark tracking-tight">Urban Duplex</h3>
                    <span class="text-gold-600 font-bold">₦2.5M/yr</span>
                </div>
                <p class="text-gray-400 text-sm mt-1 mb-6 flex items-center gap-1">
                    <i class="fa-solid fa-location-dot"></i> Ajah, Lagos
                </p>
                
                <div class="grid grid-cols-3 gap-4 py-4 border-t border-gray-50">
                    <div class="text-center">
                        <i class="fa-solid fa-bed text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">3 Beds</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-car text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">Parking</span>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-bolt text-gold-500 block mb-1"></i>
                        <span class="text-[10px] font-bold text-gray-400 uppercase">24h Power</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-16 text-center">
        <button class="bg-dark text-white px-10 py-4 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-gold-600 shadow-xl transition-all">
            See All 150+ Properties
        </button>
    </div>
</section>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            
            <div class="group bg-dark rounded-[2rem] p-8 text-white hover:bg-zinc-900 transition-all cursor-pointer">
                <div class="w-14 h-14 bg-gold-500/20 rounded-2xl flex items-center justify-center text-gold-500 mb-6 group-hover:bg-gold-500 group-hover:text-white transition-all">
                    <i class="fa-solid fa-vr-cardboard text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">See Before You Inspect</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Save time and transport. Experience a 360° virtual walk-through of any property before booking a physical visit.</p>
            </div>

            <div class="group bg-white rounded-[2rem] p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition-all">
                    <i class="fa-solid fa-shield-check text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">No Excess Charges</h3>
                <p class="text-gray-500 text-sm leading-relaxed">What you see is what you pay. We have a strict "Zero Hidden Fees" policy. No agent excess, no management surprises.</p>
            </div>

            <div class="group bg-white rounded-[2rem] p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 bg-gold-50 rounded-2xl flex items-center justify-center text-gold-600 mb-6 group-hover:bg-gold-600 group-hover:text-white transition-all">
                    <i class="fa-solid fa-star text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Dream Housing</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Whether it's a penthouse or a cozy studio, we help you secure your dream home with legal transparency.</p>
            </div>

        </div>
<?php include 'footer.php'; ?>