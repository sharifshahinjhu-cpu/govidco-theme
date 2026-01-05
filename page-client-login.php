<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoVidCo | Mission Control</title>
    
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
            background-color: #09090b; /* bg-zinc-950 */
            color: #a1a1aa; /* text-zinc-400 */
        }
        
        /* Custom Scrollbar for Dashboard */
        .dashboard-scroll::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .dashboard-scroll::-webkit-scrollbar-track {
            background: #18181b;
        }
        .dashboard-scroll::-webkit-scrollbar-thumb {
            background: #3f3f46;
            border-radius: 3px;
        }
        .dashboard-scroll::-webkit-scrollbar-thumb:hover {
            background: #dc2626;
        }

        /* Noise Overlay */
        .bg-noise {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="antialiased overflow-hidden flex h-screen selection:bg-red-500/30">

    <aside class="w-64 flex-shrink-0 flex flex-col border-r border-zinc-800 bg-zinc-900 z-20">
        <div class="h-16 flex items-center px-6 border-b border-zinc-800">
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded bg-red-600 flex items-center justify-center shadow-[0_0_15px_rgba(220,38,38,0.5)] group-hover:scale-105 transition-transform">
                    <i data-lucide="terminal" class="text-white w-4 h-4"></i>
                </div>
                <div>
                    <h1 class="font-black tracking-wider text-white text-sm">NEXUS</h1>
                    <p class="text-[10px] text-red-500 font-mono tracking-widest">STUDIOS_V2</p>
                </div>
            </a>
        </div>

        <nav class="flex-1 py-6 px-3 space-y-1 overflow-y-auto dashboard-scroll">
            
            <a href="#" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 bg-red-600/10 text-red-500 border border-red-600/20 shadow-[0_0_15px_rgba(220,38,38,0.1)]">
                <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                Overview
                <span class="ml-auto w-1.5 h-1.5 rounded-full bg-red-500 shadow-[0_0_5px_#ef4444]"></span>
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-all duration-200 group">
                <i data-lucide="rocket" class="w-4 h-4 group-hover:text-white transition-colors"></i>
                Active Missions
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-all duration-200 group">
                <i data-lucide="database" class="w-4 h-4 group-hover:text-white transition-colors"></i>
                Media Vault
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-all duration-200 group">
                <i data-lucide="box" class="w-4 h-4 group-hover:text-white transition-colors"></i>
                Brand Assets
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-all duration-200 group">
                <i data-lucide="settings" class="w-4 h-4 group-hover:text-white transition-colors"></i>
                Settings
            </a>
        </nav>

        <div class="p-4 border-t border-zinc-800 bg-zinc-950/50">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-zinc-800 border border-zinc-700 flex items-center justify-center relative overflow-hidden group cursor-pointer">
                    <i data-lucide="user" class="w-5 h-5 text-zinc-400 group-hover:text-white transition-colors"></i>
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-zinc-900"></div>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-mono text-zinc-400">ID: CLIENT_01</p>
                        <i data-lucide="wifi" class="w-3 h-3 text-green-500 animate-pulse"></i>
                    </div>
                    <p class="text-xs font-mono text-green-500 truncate">Status: Online</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col min-w-0 overflow-hidden relative bg-zinc-950">
        <div class="absolute inset-0 pointer-events-none opacity-[0.03]" 
             style="background-image: linear-gradient(#3f3f46 1px, transparent 1px), linear-gradient(90deg, #3f3f46 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <header class="h-16 border-b border-zinc-800 flex items-center justify-between px-8 bg-zinc-950/95 backdrop-blur z-10">
            <div class="flex items-center gap-4">
                <span class="font-mono text-xs border border-zinc-800 px-2 py-1 rounded text-red-500 bg-red-500/5 flex items-center gap-2">
                    <span id="sys-time">SYS.TIME // 00:00 UTC</span>
                </span>
            </div>
            
            <div class="flex items-center gap-6">
                <div class="relative hidden md:block">
                    <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-zinc-600 w-4 h-4"></i>
                    <input 
                        type="text" 
                        placeholder="Search database..." 
                        class="bg-zinc-900 border border-zinc-800 rounded-full py-1.5 pl-10 pr-4 text-sm text-zinc-300 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 w-64 placeholder:text-zinc-600 transition-all"
                    >
                </div>
                
                <div class="relative cursor-pointer group">
                    <i data-lucide="bell" class="w-5 h-5 text-zinc-400 group-hover:text-white transition-colors"></i>
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-600 rounded-full animate-pulse"></span>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 dashboard-scroll relative z-0">
            
            <div class="flex flex-col lg:flex-row gap-6 mb-8">
                <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-4">
                    
                    <div class="p-4 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-red-900/50 transition-colors relative overflow-hidden group">
                        <div class="absolute right-0 top-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                            <i data-lucide="credit-card" class="w-6 h-6 text-white"></i>
                        </div>
                        <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-wider mb-1">Available Credits</h3>
                        <p class="text-2xl font-bold text-white tracking-tight mb-2">4/8 Videos</p>
                        <p class="text-[10px] text-zinc-500 flex items-center gap-1">
                            <span class="w-1 h-1 rounded-full bg-red-500"></span>
                            Plan resets in 14 days
                        </p>
                    </div>

                    <div class="p-4 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-red-900/50 transition-colors relative overflow-hidden group">
                        <div class="absolute right-0 top-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                            <i data-lucide="activity" class="w-6 h-6 text-white"></i>
                        </div>
                        <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-wider mb-1">Current Status</h3>
                        <p class="text-2xl font-bold text-white tracking-tight mb-2">2 Active Edits</p>
                        <p class="text-[10px] text-zinc-500 flex items-center gap-1">
                            <span class="w-1 h-1 rounded-full bg-green-500"></span>
                            Optimal efficiency
                        </p>
                    </div>

                    <div class="p-4 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-red-900/50 transition-colors relative overflow-hidden group">
                        <div class="absolute right-0 top-0 p-3 opacity-10 group-hover:opacity-20 transition-opacity">
                            <i data-lucide="clock" class="w-6 h-6 text-white"></i>
                        </div>
                        <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-wider mb-1">Next Billing</h3>
                        <p class="text-2xl font-bold text-white tracking-tight mb-2">In 12 Days</p>
                        <p class="text-[10px] text-zinc-500 flex items-center gap-1">
                            <span class="w-1 h-1 rounded-full bg-zinc-500"></span>
                            Autopay: ON
                        </p>
                    </div>
                </div>
                
                <button class="h-full min-h-[80px] px-8 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:shadow-[0_0_25px_rgba(220,38,38,0.6)] transition-all flex items-center justify-center gap-2 group border border-red-500/50">
                    <i data-lucide="plus" class="w-5 h-5 group-hover:rotate-90 transition-transform"></i>
                    <span>NEW PROJECT</span>
                </button>
            </div>

            <div class="flex flex-col xl:flex-row gap-6 h-full">
                
                <div class="flex-1 bg-zinc-900/50 border border-zinc-800 rounded-xl overflow-hidden backdrop-blur-sm relative group">
                    <div class="absolute top-0 left-0 w-4 h-4 border-l-2 border-t-2 border-red-600/30 rounded-tl-lg"></div>
                    <div class="absolute top-0 right-0 w-4 h-4 border-r-2 border-t-2 border-red-600/30 rounded-tr-lg"></div>
                    <div class="absolute bottom-0 left-0 w-4 h-4 border-l-2 border-b-2 border-red-600/30 rounded-bl-lg"></div>
                    <div class="absolute bottom-0 right-0 w-4 h-4 border-r-2 border-b-2 border-red-600/30 rounded-br-lg"></div>

                    <div class="p-5 border-b border-zinc-800 flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <i data-lucide="rocket" class="w-5 h-5 text-red-600"></i>
                            Mission Pipeline
                        </h2>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                            <span class="text-[10px] text-red-500 uppercase tracking-widest font-mono">Live Sync</span>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-zinc-800 text-xs text-zinc-500 uppercase tracking-wider font-mono bg-zinc-900/50">
                                    <th class="p-4 font-normal">Project ID</th>
                                    <th class="p-4 font-normal">Name</th>
                                    <th class="p-4 font-normal">Status</th>
                                    <th class="p-4 font-normal">Progress</th>
                                    <th class="p-4 font-normal text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-zinc-800 text-sm">
                                <tr class="group hover:bg-zinc-800/30 transition-colors">
                                    <td class="p-4 font-mono text-red-400">YT-042</td>
                                    <td class="p-4 font-medium text-zinc-200">Tokyo Vlog Part 1</td>
                                    <td class="p-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-mono border border-zinc-700 bg-zinc-800 text-zinc-300">
                                            <i data-lucide="play-circle" class="w-3 h-3 text-red-500"></i> In Progress
                                        </span>
                                    </td>
                                    <td class="p-4 w-1/4">
                                        <div class="w-full bg-zinc-800 rounded-full h-1.5 overflow-hidden">
                                            <div class="bg-red-600 h-1.5 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-right">
                                        <button class="text-zinc-400 hover:text-white transition-colors border border-zinc-700 hover:border-zinc-500 px-3 py-1 rounded text-xs">Track</button>
                                    </td>
                                </tr>
                                
                                <tr class="group hover:bg-zinc-800/30 transition-colors">
                                    <td class="p-4 font-mono text-red-400">AD-101</td>
                                    <td class="p-4 font-medium text-zinc-200">Q1 Promo Reel</td>
                                    <td class="p-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-mono border border-green-900 bg-green-900/20 text-green-400 shadow-[0_0_10px_rgba(34,197,94,0.2)]">
                                            <i data-lucide="alert-circle" class="w-3 h-3"></i> Review Ready
                                        </span>
                                    </td>
                                    <td class="p-4 w-1/4">
                                        <div class="w-full bg-zinc-800 rounded-full h-1.5 overflow-hidden">
                                            <div class="bg-green-500 h-1.5 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-right">
                                        <button class="bg-green-600/10 border border-green-600/30 text-green-400 hover:bg-green-600/20 transition-colors px-3 py-1 rounded text-xs font-bold">Review</button>
                                    </td>
                                </tr>

                                <tr class="group hover:bg-zinc-800/30 transition-colors opacity-70">
                                    <td class="p-4 font-mono text-zinc-500">SH-099</td>
                                    <td class="p-4 font-medium text-zinc-400">Viral Short #5</td>
                                    <td class="p-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-mono border border-zinc-800 bg-zinc-900 text-zinc-500">
                                            <i data-lucide="clock" class="w-3 h-3"></i> Queued
                                        </span>
                                    </td>
                                    <td class="p-4 w-1/4">
                                        <div class="w-full bg-zinc-800 rounded-full h-1.5 overflow-hidden">
                                            <div class="bg-zinc-700 h-1.5 rounded-full" style="width: 0%"></div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-right">
                                        <button class="text-zinc-500 hover:text-zinc-300 transition-colors px-3 py-1 rounded text-xs">Details</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="w-full xl:w-80 flex-shrink-0 bg-black/40 border border-zinc-800 rounded-xl p-5 flex flex-col font-mono text-xs overflow-hidden">
                    <div class="flex items-center justify-between mb-4 border-b border-zinc-800 pb-2">
                        <span class="text-zinc-400 uppercase tracking-widest">System_Log</span>
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                    </div>
                    
                    <div class="flex-1 space-y-4 overflow-y-auto pr-2 dashboard-scroll">
                        
                        <div class="flex gap-3 group">
                            <span class="text-zinc-600 flex-shrink-0 group-hover:text-zinc-500 transition-colors">[10:42]</span>
                            <span class="text-blue-400 leading-relaxed">
                                <span class="opacity-50 mr-1">></span> Draft v2 uploaded for YT-042.
                            </span>
                        </div>

                        <div class="flex gap-3 group">
                            <span class="text-zinc-600 flex-shrink-0 group-hover:text-zinc-500 transition-colors">[09:15]</span>
                            <span class="text-green-400 leading-relaxed">
                                <span class="opacity-50 mr-1">></span> AD-101 rendering completed.
                            </span>
                        </div>

                        <div class="flex gap-3 group">
                            <span class="text-zinc-600 flex-shrink-0 group-hover:text-zinc-500 transition-colors">[09:10]</span>
                            <span class="text-zinc-500 leading-relaxed">
                                <span class="opacity-50 mr-1">></span> User login from IP 192.168.x.x
                            </span>
                        </div>

                        <div class="flex gap-3 group">
                            <span class="text-zinc-600 flex-shrink-0 group-hover:text-zinc-500 transition-colors">[Yesterday]</span>
                            <span class="text-yellow-500 leading-relaxed">
                                <span class="opacity-50 mr-1">></span> Payment method updated.
                            </span>
                        </div>

                        <div class="flex items-center gap-2 mt-4 pt-4 border-t border-zinc-800 opacity-50">
                            <span class="text-red-600">></span>
                            <span class="animate-pulse w-2 h-4 bg-red-600"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script>
        // Initialize Icons
        lucide.createIcons();

        // 1. Clock Logic
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour12: false, 
                hour: '2-digit', 
                minute: '2-digit' 
            });
            document.getElementById('sys-time').textContent = `SYS.TIME // ${timeString} UTC`;
        }
        setInterval(updateTime, 1000);
        updateTime();

        // 2. Simple interactivity placeholder
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('ring-1', 'ring-red-600', 'border-red-600');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('ring-1', 'ring-red-600', 'border-red-600');
        });
    </script>
</body>
</html>