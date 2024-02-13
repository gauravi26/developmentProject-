var effectsConfig = {
    "blink": {
        "css": ".highlight { border: 3px solid #FBB72D; font-weight: bold; border-radius: 5px; } .highlighted { border: 3px solid #000000; font-weight: bold; border-radius: 5px; }",
        "js": "function applyBlinkEffect(btn) { function blink1() { btn.classList.remove('highlight'); btn.classList.add('highlighted'); setTimeout(blink2, 750); } function blink2() { btn.classList.remove('highlighted'); btn.classList.add('highlight'); setTimeout(blink1, 750); } blink1(); } var btn = document.getElementById('btn'); applyBlinkEffect(btn);"
    },
    "slide-in": {
        "css": ".slide-in { transform: translateX(-100%); animation: slideIn 1s forwards; } @keyframes slideIn { 0% { transform: translateX(-100%); } 100% { transform: translateX(0); } }",
        "js": "function applySlideInEffect(btn) { btn.addEventListener('click', function () { btn.classList.add('slide-in'); }); } var btn = document.getElementById('btn'); applySlideInEffect(btn);"
    },
    "ripple": {
        "css": ".ripple-button { position: relative; overflow: hidden; transition: background-color 0.5s; border: none; background-color: #3498db; color: white; padding: 10px 20px; cursor: pointer; } .ripple-button:hover { background-color: #2980b9; } .ripple-button:active::after { content: ''; position: absolute; border-radius: 50%; background: rgba(255, 255, 255, 0.6); transform: scale(0); animation: ripple 0.6s linear; top: 50%; left: 50%; width: 100px; height: 100px; margin: -50px 0 0 -50px; } @keyframes ripple { to { transform: scale(5); opacity: 0; } }",
        "js": "function applyRippleEffect(btn) { btn.addEventListener('click', function () { btn.classList.add('ripple-button'); }); } var btn = document.getElementById('btn'); applyRippleEffect(btn);"
    },
   "toggle": {
        "css": ".toggle-button { background-color: #3498db; color: white; padding: 10px 20px; cursor: pointer; } .toggle-button.active { background-color: #e74c3c; }",
        "js": "function applyToggleEffect(btn) { let isToggled = false; btn.addEventListener('click', function () { isToggled = !isToggled; if (isToggled) { btn.classList.add('active'); } else { btn.classList.remove('active'); } }); } var btn = document.getElementById('btn'); applyToggleEffect(btn);"
},
}
