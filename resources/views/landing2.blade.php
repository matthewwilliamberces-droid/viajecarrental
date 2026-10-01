{{--
    resources/views/landing.blade.php

    Route example (routes/web.php):
        Route::get('/', fn () => view('landing'));

    Tailwind is loaded via CDN so this file works standalone with zero build
    step. If your app already compiles Tailwind through Vite, remove the
    <script src="https://cdn.tailwindcss.com"> tag and the inline
    tailwind.config block, and add the same color/font tokens to your
    tailwind.config.js instead.
--}}
@php
    $stats = [
        ['value' => '6',     'label' => 'Islands served'],
        ['value' => '180+',  'label' => 'Pickup hubs'],
        ['value' => '4.9',   'label' => 'Driver rating'],
    ];

    $steps = [
        ['num' => '01', 'title' => 'Pick your island', 'body' => 'Manila, Cebu, Boracay, Palawan and more â€” choose where you land and we\'ll have a car waiting.'],
        ['num' => '02', 'title' => 'Show your ID & go', 'body' => 'A Philippine license or an International Driving Permit is all it takes. Scan, sign, drive off.'],
        ['num' => '03', 'title' => 'Return or hop islands', 'body' => 'Drop off at your hub, or bring the van on the RoRo ferry to your next stop â€” no extra paperwork.'],
    ];

    $fleet = [
        [
            'class' => 'CLASS 01 Â· ECONOMY',
            'name'  => 'Barrio Runner',
            'body'  => 'Compact and easy to park down narrow barangay streets. Great for city errands.',
            'price' => '1,500',
            'image' => 'https://images.pexels.com/photos/166680/pexels-photo-166680.jpeg?auto=compress&cs=tinysrgb&w=800',
            'alt'   => 'Compact blue hatchback parked against a brick wall',
        ],
        [
            'class' => 'CLASS 02 Â· SEDAN',
            'name'  => 'Fiesta Sedan',
            'body'  => 'Room for four, a real trunk for pasalubong, and a smooth ride between provinces.',
            'price' => '2,200',
            'image' => 'https://images.pexels.com/photos/29181245/pexels-photo-29181245.jpeg?auto=compress&cs=tinysrgb&w=800',
            'alt'   => 'Modern grey sedan parked outdoors against a brick wall',
        ],
        [
            'class' => 'CLASS 03 Â· SUV',
            'name'  => 'Palawan Trailblazer',
            'body'  => 'Higher clearance for unpaved roads to hidden lagoons and viewpoints.',
            'price' => '3,200',
            'image' => 'https://images.pexels.com/photos/31501638/pexels-photo-31501638.jpeg?auto=compress&cs=tinysrgb&w=800',
            'alt'   => 'Blue compact SUV parked on an urban street',
        ],
        [
            'class' => 'CLASS 04 Â· VAN',
            'name'  => 'Island Hopper',
            'body'  => 'Ten seats for the whole barkada, plus space for boards, bags, and coolers.',
            'price' => '4,500',
            'image' => 'https://images.pexels.com/photos/35831380/pexels-photo-35831380.jpeg?auto=compress&cs=tinysrgb&w=800',
            'alt'   => 'White passenger van parked outside a modern building',
        ],
    ];

    $islands = [
        ['name' => 'Metro Manila', 'hubs' => '48 hubs', 'note' => 'NAIA T1â€“T3, Makati, QC'],
        ['name' => 'Cebu',         'hubs' => '31 hubs', 'note' => 'Mactan airport, IT Park'],
        ['name' => 'Boracay',      'hubs' => '12 hubs', 'note' => 'Caticlan jetty port'],
        ['name' => 'Palawan',      'hubs' => '19 hubs', 'note' => 'Puerto Princesa, El Nido'],
        ['name' => 'Davao',        'hubs' => '22 hubs', 'note' => 'Francisco Bangoy airport'],
        ['name' => 'Siargao',      'hubs' => '9 hubs',  'note' => 'Sayak airport, Cloud 9'],
    ];

    $features = [
        ['value' => '₱0',   'title' => 'No counter fees',   'body' => 'The price you see at search is the price you pay. Insurance and terminal fees are itemized up front.'],
        ['value' => '24/7', 'title' => 'Roadside assist',   'body' => 'Flat tire on the way to Kawasan Falls? One call and someone\'s dispatched, island or mainland.'],
        ['value' => 'GCash'₱'title' => 'Pay your way',      'body' => 'GCash, Maya, or card at checkout â€” no need to carry cash for the deposit.'],
        ['value' => '2 min'₱'title' => 'Free cancellation', 'body' => 'Weather changes travel plans. Cancel free up to 24 hours before pickup, refunded automatically.'],
    ];

    $faqs = [
        ['q' => 'What ID do I need to rent?', 'a' => 'A valid Philippine driver\'s license for locals, or an International Driving Permit alongside your home license for visiting tourists.'],
        ['q' => 'Can I bring the van on a RoRo ferry between islands?', 'a' => 'Yes â€” vans and SUVs are cleared for RoRo travel on our standard routes. Let us know your route at booking so we can flag it for the crossing.'],
        ['q' => 'Is there a young-driver surcharge?', 'a' => 'Drivers 21â€“24 pay a small daily surcharge, shown at checkout before you confirm â€” never added after the fact.'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Sakay â€” Island car rental across the Philippines' }}</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          ocean: { DEFAULT: '#0B5E63', 2: '#094B4F', 3: '#073A3D' },
          sand:  { DEFAULT: '#FDF3DF', 2: '#F7E8C8' },
          mango: '#FF7A33',
          palm:  '#1F8A5F',
          hibiscus: '#E9487F',
          ink:   '#0B2E2C',
        },
        fontFamily: {
          display: ['"Baloo 2"', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
        },
      },
    },
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  body { background-color: #FDF3DF; }
  .stripe {
    height: 6px;
    background: repeating-linear-gradient(
      90deg,
      #FF7A33 0 40px,
      #1F8A5F 40px 80px,
      #E9487F 80px 120px,
      #0B5E63 120px 160px
    );
  }
  .plate { border: 2px solid #0B2E2C; box-shadow: 3px 3px 0 #0B2E2C; }
  .plate-light { border: 2px solid #FDF3DF; box-shadow: 3px 3px 0 #FDF3DF; }
  .sun-ray {
    background: radial-gradient(circle, rgba(255,122,51,0.25) 0%, rgba(255,122,51,0) 70%);
  }
  .num-badge {
    font-family: '"Baloo 2"', sans-serif;
  }
  @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
  .focus-ring:focus-visible { outline: 3px solid #FF7A33; outline-offset: 2px; }
</style>
</head>
<body class="font-body text-ink antialiased">

{{-- NAV --}}
<header class="sticky top-0 z-50 bg-sand/95 backdrop-blur border-b border-ink/10">
  <div class="max-w-7xl mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">
    <a href="#top" class="focus-ring flex items-center gap-2">
      <span class="font-display font-bold text-2xl tracking-wide text-ocean">SAKAY</span>
      <span class="w-2.5 h-2.5 rounded-full bg-mango"></span>
    </a>
    <nav class="hidden md:flex items-center gap-9 font-medium text-sm uppercase tracking-wider text-ink/70">
      <a href="#fleet" class="focus-ring hover:text-ocean transition-colors">Fleet</a>
      <a href="#islands" class="focus-ring hover:text-ocean transition-colors">Islands</a>
      <a href="#how" class="focus-ring hover:text-ocean transition-colors">How it works</a>
      <a href="#faq" class="focus-ring hover:text-ocean transition-colors">FAQ</a>
    </nav>
    <a href="#book" class="focus-ring plate bg-mango text-sand font-display font-semibold uppercase tracking-wide text-sm px-5 py-2.5 hover:-translate-y-0.5 hover:shadow-none transition-transform">
      Book a ride
    </a>
  </div>
</header>

{{-- HERO --}}
<section id="top" class="relative bg-ocean text-sand overflow-hidden">
  <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full sun-ray"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-10 pt-16 pb-24 lg:pt-24 lg:pb-32 relative">
    <div class="grid lg:grid-cols-12 gap-12 items-end">
      <div class="lg:col-span-7">
        <p class="text-mango font-display font-semibold text-sm tracking-[0.25em] mb-5">MABUHAY Â· ISLAND CAR RENTAL</p>
        <h1 class="font-display font-extrabold uppercase leading-[0.95] text-[12vw] sm:text-6xl lg:text-7xl">
          Island time starts with a set of keys.
        </h1>
        <p class="mt-7 text-lg text-sand/75 max-w-md">
          Rent a car on arrival at any major Philippine hub â€” Manila to Siargao â€” and drive off in minutes. No counter lines, no surprise fees.
        </p>
        <div class="mt-9 flex flex-wrap gap-4">
          <a href="#book" class="focus-ring plate-light bg-mango text-sand font-display font-semibold uppercase tracking-wide px-7 py-3.5 hover:-translate-y-0.5 hover:shadow-none transition-transform">
            Find a car
          </a>
          <a href="#fleet" class="focus-ring border border-sand/40 text-sand font-display uppercase tracking-wide px-7 py-3.5 hover:bg-sand/10 transition-colors">
            Browse fleet
          </a>
        </div>
      </div>

      {{-- stat block, driven by $stats --}}
      <div class="lg:col-span-5 grid grid-cols-3 gap-px bg-sand/15 border border-sand/15">
        @foreach ($stats as $stat)
          <div class="bg-ocean-2 p-5">
            <p class="font-display text-3xl sm:text-4xl font-bold text-mango">{{ $stat['value'] }}</p>
            <p class="text-xs uppercase tracking-wider text-sand/60 mt-2">{{ $stat['label'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="stripe"></div>
</section>

{{-- BOOKING PANEL --}}
<section id="book" class="relative -mt-8 lg:-mt-10 z-10">
  <div class="max-w-5xl mx-auto px-6 lg:px-10">
    <form method="POST" action="{{ url('/search') }}" class="plate bg-sand p-6 sm:p-8 grid sm:grid-cols-4 gap-5">
      @csrf
      <div class="sm:col-span-2">
        <label for="pickup-loc" class="block text-xs font-semibold uppercase tracking-wider text-ink/60 mb-2">Pickup hub</label>
        <input id="pickup-loc" name="pickup_location" type="text" value="{{ old('pickup_location') }}" placeholder="Manila, Cebu, Boracay, Palawanâ€¦" class="focus-ring w-full bg-transparent border-b-2 border-ink/20 py-2 font-medium placeholder:text-ink/40 focus:border-mango outline-none">
        @error('pickup_location')
          <p class="text-xs text-red-700 mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div>
        <label for="pickup-date" class="block text-xs font-semibold uppercase tracking-wider text-ink/60 mb-2">Pickup</label>
        <input id="pickup-date" name="pickup_date" type="date" value="{{ old('pickup_date') }}" class="focus-ring w-full bg-transparent border-b-2 border-ink/20 py-2 font-medium focus:border-mango outline-none">
      </div>
      <div>
        <label for="return-date" class="block text-xs font-semibold uppercase tracking-wider text-ink/60 mb-2">Return</label>
        <input id="return-date" name="return_date" type="date" value="{{ old('return_date') }}" class="focus-ring w-full bg-transparent border-b-2 border-ink/20 py-2 font-medium focus:border-mango outline-none">
      </div>
      <div class="sm:col-span-4 flex justify-end pt-2">
        <button type="submit" class="focus-ring bg-ocean text-sand font-display uppercase tracking-wide px-8 py-3 hover:bg-palm transition-colors">
          Search cars
        </button>
      </div>
    </form>
  </div>
</section>

{{-- HOW IT WORKS â€” driven by $steps --}}
<section id="how" class="max-w-7xl mx-auto px-6 lg:px-10 pt-28 pb-24">
  <div class="flex items-end justify-between mb-16 flex-wrap gap-4">
    <h2 class="font-display font-bold uppercase text-4xl sm:text-5xl text-ocean">Three steps.<br class="hidden sm:block"> Then the beach.</h2>
    <p class="max-w-xs text-ink/60">No line at the counter, no upsell script, no surprise charges when you hand back the keys.</p>
  </div>

  <div class="grid sm:grid-cols-3 gap-10 sm:gap-6">
    @foreach ($steps as $step)
      <div class="relative">
        <p class="num-badge text-5xl font-extrabold text-mango/30 mb-3">{{ $step['num'] }}</p>
        <h3 class="font-display font-semibold uppercase text-2xl mb-2 text-ocean">{{ $step['title'] }}</h3>
        <p class="text-ink/65 text-sm leading-relaxed">{{ $step['body'] }}</p>
      </div>
    @endforeach
  </div>
</section>

{{-- FLEET â€” driven by $fleet --}}
<section id="fleet" class="bg-ocean text-sand py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="flex items-end justify-between mb-14 flex-wrap gap-4">
      <h2 class="font-display font-bold uppercase text-4xl sm:text-5xl">Pick your ride.</h2>
      <p class="max-w-xs text-sand/60">Four classes, transparent per-day pricing in pesos, no class ever mysteriously "unavailable" at checkout.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @foreach ($fleet as $car)
        <div class="bg-ocean-2 border border-sand/10 overflow-hidden flex flex-col hover:border-mango/60 transition-colors">
          <div class="aspect-[4/3] overflow-hidden bg-sand/5">
            <img
              src="{{ $car['image'] }}"
              alt="{{ $car['alt'] }}"
              loading="lazy"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
            >
          </div>
          <div class="p-6 flex flex-col flex-1">
          <p class="text-mango text-xs font-semibold tracking-widest mb-1">{{ $car['class'] }}</p>
          <h3 class="font-display text-2xl uppercase mb-3">{{ $car['name'] }}</h3>
          <p class="text-sand/60 text-sm flex-1">{{ $car['body'] }}</p>
          <div class="mt-6 flex items-end justify-between">
            <p class="font-display text-3xl font-bold">₱{{ $car['price'] }}<span class="text-sm font-normal text-sand/50">/day</span></p>
            <a href="#book" class="focus-ring text-xs uppercase tracking-wider border-b border-mango text-mango hover:text-sand hover:border-sand transition-colors">Reserve</a>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ISLANDS WE SERVE â€” driven by $islands --}}
<section id="islands" class="max-w-7xl mx-auto px-6 lg:px-10 py-24">
  <div class="flex items-end justify-between mb-14 flex-wrap gap-4">
    <h2 class="font-display font-bold uppercase text-4xl sm:text-5xl text-ocean">Island to island.</h2>
    <p class="max-w-xs text-ink/60">Pick up on one island, drop off on another â€” our hub network handles the rest.</p>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($islands as $island)
      <div class="bg-sand-2 p-6 flex items-start gap-4 hover:bg-mango/10 transition-colors">
        <div class="shrink-0 w-11 h-11 rounded-full bg-ocean flex items-center justify-center">
          <svg viewBox="0 0 24 24" class="w-5 h-5 text-mango" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11Z"/>
            <circle cx="12" cy="10" r="2.5"/>
          </svg>
        </div>
        <div>
          <h3 class="font-display font-semibold text-xl text-ocean">{{ $island['name'] }}</h3>
          <p class="text-sm text-ink/60">{{ $island['hubs'] }} Â· {{ $island['note'] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>

{{-- WHY â€” driven by $features --}}
<section class="bg-sand-2 py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <h2 class="font-display font-bold uppercase text-4xl sm:text-5xl mb-14 max-w-lg text-ocean">Everything the counter usually hides, printed up front.</h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-ink/10 border border-ink/10">
      @foreach ($features as $feature)
        <div class="bg-sand p-7">
          <p class="font-display text-mango text-2xl font-bold mb-3">{{ $feature['value'] }}</p>
          <h3 class="font-display uppercase text-lg mb-2 text-ocean">{{ $feature['title'] }}</h3>
          <p class="text-sm text-ink/60">{{ $feature['body'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- TESTIMONIAL --}}
<section class="bg-palm text-sand py-20">
  <div class="max-w-4xl mx-auto px-6 lg:px-10 text-center">
    <p class="font-display font-semibold uppercase text-3xl sm:text-4xl leading-snug">
      "Landed in El Nido, picked up a Trailblazer at the port, and was at Nacpan Beach in twenty minutes."
    </p>
    <p class="mt-6 text-sm tracking-widest text-sand/70">â€” A. SANTOS, RENTED A PALAWAN TRAILBLAZER IN EL NIDO</p>
  </div>
</section>

{{-- FAQ â€” driven by $faqs --}}
<section id="faq" class="max-w-4xl mx-auto px-6 lg:px-10 py-24">
  <h2 class="font-display font-bold uppercase text-4xl sm:text-5xl mb-12 text-ocean">Questions, answered.</h2>
  <div class="divide-y divide-ink/15 border-t border-b border-ink/15">
    @foreach ($faqs as $faq)
      <details class="group py-5">
        <summary class="focus-ring flex items-center justify-between cursor-pointer font-display font-medium uppercase text-lg">
          {{ $faq['q'] }}
          <span class="text-mango group-open:rotate-45 transition-transform text-2xl leading-none">+</span>
        </summary>
        <p class="mt-3 text-ink/65 text-sm max-w-xl">{{ $faq['a'] }}</p>
      </details>
    @endforeach
  </div>
</section>

{{-- CTA --}}
<section class="bg-ocean text-sand">
  <div class="stripe"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-10 py-20 text-center">
    <h2 class="font-display font-extrabold uppercase text-4xl sm:text-6xl mb-6">Keys are waiting.</h2>
    <a href="#book" class="focus-ring plate-light inline-block bg-mango text-sand font-display font-semibold uppercase tracking-wide px-9 py-4 hover:-translate-y-0.5 hover:shadow-none transition-transform">
      Start your booking
    </a>
  </div>
</section>

{{-- FOOTER --}}
<footer class="bg-ocean-3 text-sand/60 border-t border-sand/10">
  <div class="max-w-7xl mx-auto px-6 lg:px-10 py-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-sm">
    <div>
      <p class="font-display font-bold text-xl text-sand uppercase mb-3">Sakay</p>
      <p class="max-w-[24ch]">Island car rental, 180+ pickup hubs across the Philippines.</p>
    </div>
    <div>
      <p class="uppercase tracking-wider text-sand/40 mb-3 text-xs">Company</p>
      <ul class="space-y-2">
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">About</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Careers</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Press</a></li>
      </ul>
    </div>
    <div>
      <p class="uppercase tracking-wider text-sand/40 mb-3 text-xs">Support</p>
      <ul class="space-y-2">
        <li><a href="#faq" class="focus-ring hover:text-sand transition-colors">FAQ</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Roadside help</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Contact</a></li>
      </ul>
    </div>
    <div>
      <p class="uppercase tracking-wider text-sand/40 mb-3 text-xs">Legal</p>
      <ul class="space-y-2">
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Terms</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Privacy</a></li>
        <li><a href="#" class="focus-ring hover:text-sand transition-colors">Insurance</a></li>
      </ul>
    </div>
  </div>
  <div class="border-t border-sand/10 py-6 text-center text-xs text-sand/40">
    &copy; {{ now()->year }} Sakay Rentals. Mabuhay, wherever you're headed.
  </div>
</footer>

</body>
</html>