<?php /* Template Name: Terms of Service */ get_header(); ?>

<main class="relative z-10 pt-32 pb-20 px-6 min-h-screen bg-zinc-950">
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
    
    <div class="max-w-4xl mx-auto relative z-10">
        
        <header class="text-center mb-16 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-amber-900/50 bg-amber-950/30 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                <span class="text-xs font-mono text-amber-500 tracking-widest">EFFECTIVE: JAN 2026</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight font-sans">
                Terms of Engagement
            </h1>
            
            <p class="text-lg text-zinc-400 max-w-2xl mx-auto font-light leading-relaxed">
                The operational doctrine for GoVidCo services. By initiating a project or subscription, you agree to these protocols.
            </p>
        </header>

        <section class="mb-12">
            <h2 class="text-amber-500 font-mono text-sm mb-4 border-b border-amber-900/30 pb-2">CLAUSE 1.0 // SERVICE_SCOPE</h2>
            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-xl">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-zinc-950 rounded-lg border border-zinc-800 text-zinc-400">
                        <i data-lucide="briefcase" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2">Independent Contractor Status</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed mb-4">
                            GoVidCo acts as an independent contractor, not an employee. We provide white-label video editing and post-production services. You retain full control over the creative direction, while we handle the technical execution.
                        </p>
                        <p class="text-zinc-400 text-sm leading-relaxed">
                            We reserve the right to utilize our internal network of vetted specialists (editors, sound designers, colorists) to fulfill your orders.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-amber-500 font-mono text-sm mb-4 border-b border-amber-900/30 pb-2">CLAUSE 2.0 // FINANCIAL_PROTOCOL</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-xl hover:border-amber-500/30 transition-colors">
                    <div class="mb-4 text-amber-500">
                        <i data-lucide="credit-card" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Pre-Paid Services</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">
                        All subscriptions and credit packs are pre-paid. Work begins only after the invoice is cleared. Subscriptions renew automatically every 30 days unless a cancellation request is received via the dashboard 72 hours prior to renewal.
                    </p>
                </div>

                <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-xl hover:border-amber-500/30 transition-colors">
                    <div class="mb-4 text-amber-500">
                        <i data-lucide="ban" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-white font-bold mb-2">Refund Policy</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">
                        <strong>Labor cannot be returned.</strong> Therefore, we do not offer refunds on completed work or unused credits that expire. We strictly offer "Unlimited Revisions" to ensure the final output meets your satisfaction within the original scope.
                    </p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-amber-500 font-mono text-sm mb-4 border-b border-amber-900/30 pb-2">CLAUSE 3.0 // REVISION_PROTOCOL</h2>
            <div class="bg-zinc-900/50 border border-zinc-800 p-8 rounded-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10">
                    <i data-lucide="refresh-cw" class="w-24 h-24 text-white"></i>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4">The "Unlimited" Definition</h3>
                    <ul class="space-y-4 text-zinc-400 text-sm font-mono">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 mt-1">>></span>
                            <span>INCLUDED: Pacing adjustments, music swaps, color grading tweaks, sound mixing, text/graphic changes.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 mt-1">>></span>
                            <span>EXCLUDED: Changing the script/voiceover after editing has begun, adding entirely new footage not provided in the brief, or changing the video concept entirely.</span>
                        </li>
                    </ul>
                    <p class="mt-6 text-xs text-zinc-500 uppercase tracking-widest">
                        *Changes outside the original brief will be billed as a new project or deduct credits.*
                    </p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-amber-500 font-mono text-sm mb-4 border-b border-amber-900/30 pb-2">CLAUSE 4.0 // TIME_CONSTRAINTS</h2>
            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-xl flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-shrink-0 p-4 bg-zinc-950 rounded-full border border-zinc-800">
                    <i data-lucide="clock" class="w-8 h-8 text-zinc-400"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-2">Standard Turnaround (SLA)</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed mb-4">
                        Our standard delivery window is <strong>24-48 hours</strong> for short-form content and 48-72 hours for long-form content (under 15 mins raw footage). Complex projects (documentaries, heavy VFX) will receive a custom timeline upon briefing.
                    </p>
                    <p class="text-zinc-500 text-xs font-mono">
                        // OPERATING HOURS: Monday - Friday. Weekend work is reserved for "Rush" packages only.
                    </p>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <div class="border border-red-900/50 bg-red-950/10 p-8 rounded-xl relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSIjN2YxZDFkIiBmaWxsLW9wYWNpdHk9IjAuMiIvPjwvc3ZnPg==')] opacity-30"></div>
                
                <div class="relative z-10 flex items-start gap-4">
                    <i data-lucide="alert-octagon" class="w-8 h-8 text-red-600 flex-shrink-0"></i>
                    <div>
                        <h2 class="text-red-500 font-mono text-sm mb-2 uppercase tracking-widest font-bold">CLAUSE 5.0 // TERMINATION_PROTOCOL</h2>
                        <h3 class="text-xl font-bold text-white mb-2">Right to Refuse Service</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed">
                            We reserve the right to terminate any active project or subscription immediately, without refund, in cases of:
                        </p>
                        <ul class="list-disc list-inside text-zinc-400 text-sm mt-4 space-y-1 marker:text-red-600">
                            <li>Abusive behavior towards our staff or creatives.</li>
                            <li>Requests to edit illegal, hateful, or explicit content.</li>
                            <li>Consistent failure to provide necessary assets for project completion.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center border-t border-zinc-900 pt-12">
            <p class="text-zinc-500 text-sm mb-4">Questions regarding the doctrine?</p>
            <a href="mailto:legal@govidco.com" class="text-amber-500 hover:text-white transition-colors font-mono text-sm border-b border-amber-500/30 pb-1">
                legal@govidco.com
            </a>
        </footer>

    </div>
</main>

<script>
    // Ensure icons render
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php get_footer(); ?>