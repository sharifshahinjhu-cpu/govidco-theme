<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/GoVidCo_Favicon_Transparent.png" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/GoVidCo_Favicon_Transparent.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        zinc: {
                            850: '#1f1f22',
                            900: '#18181b',
                            950: '#09090b',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Utilities */
        body {
            background-color: #020408; /* Deep Dark System Theme */
            color: #a1a1aa; /* text-zinc-400 */
        }
        
        /* Noise Overlay */
        .bg-noise {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
        }

        /* Form Autofill Styling Override */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            -webkit-text-fill-color: white;
            -webkit-box-shadow: 0 0 0px 1000px #18181b inset;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased overflow-x-hidden selection:bg-red-500/30'); ?>>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="relative w-64 h-64 md:w-96 md:h-96">
            <video autoplay muted playsinline class="w-full h-full object-contain mix-blend-screen">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/GoVidCo_Intro_Animation_Neon.mp4" type="video/mp4">
            </video>
        </div>
        <div class="text-red-600 font-mono text-xs animate-pulse mt-4">
            INITIALIZING_SYSTEM...
        </div>
    </div>

    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-4 border-b border-transparent bg-zinc-950/80 backdrop-blur-md">
        <div class="container mx-auto px-4 xl:px-6 flex justify-between items-center">
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GoVidCo_Primary_Logo_White.png" 
                     alt="GoVidCo Logo" 
                     class="h-12 w-auto object-contain transition-opacity group-hover:opacity-80"
                     width="240" 
                     height="70">
            </a>
            
            <div class="hidden xl:flex items-center gap-8">
                <ul class="flex items-center gap-6 text-sm font-medium text-zinc-400">
                    <li><a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>" class="hover:text-white transition-colors">Services</a></li>
                    <li><a href="<?php echo home_url('/pricing/'); ?>" class="hover:text-white transition-colors">Pricing</a></li>
                    <li><a href="<?php echo home_url('/portfolio/'); ?>" class="hover:text-white transition-colors">Portfolio</a></li>
                    <li><a href="<?php echo home_url('/testimonials/'); ?>" class="hover:text-white transition-colors">Testimonial</a></li>
                    <li><a href="<?php echo home_url('/about/'); ?>" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="<?php echo home_url('/faq/'); ?>" class="hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="<?php echo home_url('/blog/'); ?>" class="hover:text-white transition-colors">Blog</a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>" class="hover:text-white transition-colors">Contact</a></li>
                </ul>

                <a href="<?php echo home_url('/dashboard/'); ?>" class="bg-red-600 text-white px-6 py-2.5 rounded-full font-bold text-sm hover:bg-red-700 transition-all shadow-[0_0_15px_rgba(220,38,38,0.5)] hover:scale-105">
                    DASHBOARD
                </a>
            </div>

            <button id="mobile-menu-btn" class="xl:hidden text-white hover:text-red-500 transition-colors">
                <i data-lucide="menu" class="w-8 h-8"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-zinc-950 border-b border-zinc-800 p-6 shadow-2xl">
            <div class="flex flex-col space-y-4 font-mono">
                <a href="<?php echo home_url('/'); ?>" class="text-lg font-medium text-zinc-400 hover:text-white">Home</a>
                <a href="<?php echo home_url('/services/'); ?>" class="text-lg font-medium text-zinc-400 hover:text-white">Services</a>
                <a href="<?php echo home_url('/pricing/'); ?>" class="text-lg font-medium text-zinc-400 hover:text-white">Pricing</a>
                <a href="<?php echo home_url('/portfolio/'); ?>" class="text-lg font-medium text-zinc-400 hover:text-white">Portfolio</a>
                <a href="<?php echo home_url('/contact/'); ?>" class="text-lg font-medium text-zinc-400 hover:text-white">Contact</a>
                <a href="<?php echo home_url('/dashboard/'); ?>" class="bg-red-600 text-white w-full py-4 rounded-lg font-bold shadow-[0_0_15px_rgba(220,38,38,0.3)] text-center">
                    PROJECT DASHBOARD
                </a>
            </div>
        </div>
    </nav>