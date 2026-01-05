<footer class="bg-[#020408] border-t border-zinc-900 text-zinc-500 font-mono text-xs md:text-sm pt-16 pb-8 relative z-50">
    
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="mb-16 border border-zinc-800 bg-zinc-900/20 p-6 md:p-8 rounded-sm relative overflow-hidden group">
            <div class="absolute inset-0 bg-[linear-gradient(rgba(18,18,18,0)_50%,rgba(0,0,0,0.25)_50%),linear-gradient(90deg,rgba(255,0,0,0.06),rgba(255,0,0,0.02),rgba(255,0,0,0.06))] z-0 bg-[length:100%_4px,6px_100%] pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-end justify-between gap-6">
                <div class="space-y-2">
                    <h3 class="text-red-600 font-bold tracking-widest text-sm uppercase flex items-center gap-2">
                        <i data-lucide="radio" class="w-4 h-4"></i>
                        // INTERCEPT_DAILY_INTEL
                    </h3>
                    <p class="text-zinc-400 max-w-md text-xs">Decrypting algorithm updates and editing meta data.</p>
                </div>
                
                <form class="flex w-full md:w-auto max-w-md gap-0">
                    <div class="relative flex-grow">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-zinc-600">></span>
                        <input type="email" placeholder="ENTER_EMAIL_ID" class="w-full bg-zinc-950 border border-zinc-800 border-r-0 rounded-l-sm py-3 pl-8 pr-4 text-zinc-300 focus:outline-none focus:border-red-600 focus:ring-0 placeholder-zinc-700 transition-colors uppercase font-mono text-xs h-10">
                    </div>
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 h-10 rounded-r-sm font-bold transition-all border border-red-600 uppercase tracking-wide text-xs flex items-center">
                        [ EXECUTE ]
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20 border-b border-zinc-900 pb-12">
            
            <div class="space-y-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GoVidCo_Social_Profile_Square.png" 
                         alt="GoVidCo System Node" 
                         class="w-12 h-12 rounded-sm border border-zinc-800 object-cover hover:border-red-600 transition-colors"
                         loading="lazy">
                </a>
                <div class="space-y-3 text-[10px] uppercase">
                    <p class="text-zinc-600">SYS_VER: <span class="text-zinc-400">v2.0.5 [STABLE]</span></p>
                    <div class="flex items-center gap-2">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-emerald-500 tracking-wider font-bold">// STATUS: OPERATIONAL</span>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 border-b border-zinc-800 pb-2 inline-block uppercase tracking-widest text-[10px]">DIRECTORY</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Pricing</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Portfolio</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Testimonial</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> About Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 border-b border-zinc-800 pb-2 inline-block uppercase tracking-widest text-[10px]">PROTOCOLS</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> FAQ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Contact</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Project Dashboard</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Terms & Service</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/career/' ) ); ?>" class="hover:text-red-600 transition-colors flex items-center gap-2 group"><span class="text-zinc-800 group-hover:text-red-900">></span> Career</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 border-b border-zinc-800 pb-2 inline-block uppercase tracking-widest text-[10px]">UPLINK_CONNECT</h4>
                <div class="grid grid-cols-4 gap-2">
                    <a href="https://www.linkedin.com/company/govidco2025/" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    
                    <a href="https://wa.me/8801797861891" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>

                    <a href="https://www.pinterest.com/govidco/" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.399.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.951-7.252 4.173 0 7.41 2.967 7.41 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg>
                    </a>

                    <a href="https://x.com/GoVidCo" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>

                    <a href="https://www.tiktok.com/@govidco" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>

                    <a href="https://www.facebook.com/govidco25/" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036c-2.148 0-2.797 1.651-2.797 2.895v1.076h3.44l-.26 3.667h-3.18v7.954c5.007-.75 8.57-5.064 8.57-10.155 0-5.698-4.66-10.315-10.41-10.315-5.75 0-10.41 4.617-10.41 10.315 0 4.935 3.321 9.157 8.04 10.181Z"/></svg>
                    </a>

                    <a href="https://www.youtube.com/@GoVidCo" target="_blank" class="w-9 h-9 border border-zinc-800 bg-zinc-950 flex items-center justify-center hover:bg-zinc-900 hover:border-red-600 hover:text-white transition-all group">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="border-t border-zinc-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] uppercase tracking-widest text-zinc-600 font-mono">
            <div>
                &copy; 2026 GOVIDCO SYSTEMS INC.
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <span>SERVER_LOC: DECENTRALIZED_NODES</span>
                <span>LATENCY: 24MS</span>
                <span class="flex items-center gap-2 text-red-900">
                    <span class="w-1.5 h-1.5 bg-red-600 rounded-full animate-pulse"></span>
                    <span class="text-red-600 font-bold">LIVE_FEED</span>
                </span>
            </div>
        </div>

    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

<script>
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>