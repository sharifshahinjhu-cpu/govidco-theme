<?php 
/**
 * Template Name: Vault Privacy Protocol
 */
get_header(); ?>

<main class="relative z-10 pt-32 pb-20 px-6 min-h-screen bg-zinc-950">
    <div class="max-w-4xl mx-auto relative z-10">
        <header class="text-center mb-16 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-xs font-mono text-emerald-500 tracking-widest uppercase">Status: Encrypted</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter">Data Protection Protocol</h1>
            <p class="text-lg text-zinc-400 max-w-2xl mx-auto font-light italic">
                Enterprise-grade security for your intellectual property. Your footage is locked in our vault.
            </p>
            <p class="font-mono text-[10px] text-zinc-600 uppercase tracking-[0.3em]">Last Updated: January 2026</p>
        </header>

        <section class="mb-16">
            <div class="relative bg-zinc-900/50 border border-emerald-900/30 p-8 rounded-2xl overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/5 blur-[100px]"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                    <div class="p-4 bg-emerald-950/50 rounded-xl border border-emerald-500/20 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-white mb-2 uppercase tracking-tight">The "IP Ironclad" Guarantee</h2>
                        <p class="text-zinc-400 text-sm leading-relaxed">
                            GoVidCo claims ZERO ownership over your raw files or final edits. We transfer 100% copyright to you immediately upon delivery. Your assets are never reused, resold, or showcased without explicit permission.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid md:grid-cols-3 gap-6 mb-16">
            <div class="p-6 bg-zinc-900/30 border border-zinc-800 rounded-xl">
                <h3 class="text-emerald-500 font-mono text-xs uppercase mb-4 tracking-tighter">// 256-Bit Encryption</h3>
                <p class="text-zinc-400 text-xs leading-relaxed">All footage transfers and storage protocols utilize enterprise-grade AES-256 encryption standards.</p>
            </div>
            <div class="p-6 bg-zinc-900/30 border border-zinc-800 rounded-xl">
                <h3 class="text-emerald-500 font-mono text-xs uppercase mb-4 tracking-tighter">// NDA Enforcement</h3>
                <p class="text-zinc-400 text-xs leading-relaxed">Every editor in our network is bound by strict, legally-enforced Non-Disclosure Agreements.</p>
            </div>
            <div class="p-6 bg-zinc-900/30 border border-zinc-800 rounded-xl">
                <h3 class="text-emerald-500 font-mono text-xs uppercase mb-4 tracking-tighter">// Auto-Purge Protocol</h3>
                <p class="text-zinc-400 text-xs leading-relaxed">Raw assets are permanently purged from our secure servers 30 days after project completion.</p>
            </div>
        </div>

        <section class="p-8 bg-zinc-900/50 border border-zinc-800 rounded-2xl mb-16">
            <h2 class="text-xl font-bold text-white mb-4 uppercase tracking-tighter">AI Usage & Data Integrity</h2>
            <p class="text-zinc-400 text-sm leading-relaxed">
                We do <span class="text-white font-bold underline decoration-red-600">NOT</span> use your private footage to train any public AI models. Any AI implementation (masking, upscaling) is performed within a secure, closed-loop environment to maintain total data integrity.
            </p>
        </section>

        <footer class="text-center pt-8 border-t border-zinc-900">
            <p class="text-zinc-500 text-xs mb-4">For data deletion requests or privacy inquiries:</p>
            <a href="mailto:privacy@govidco.com" class="text-emerald-500 font-mono text-sm hover:underline">privacy@govidco.com</a>
        </footer>
    </div>
</main>

<?php get_footer(); ?>