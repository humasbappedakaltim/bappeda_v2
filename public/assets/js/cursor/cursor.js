(function () {
    // Ensure custom cursor elements exist
    document.addEventListener('DOMContentLoaded', function () {
      const cursorMarkup = `
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
      `;
      document.body.insertAdjacentHTML('beforeend', cursorMarkup);
  
      const cursor = document.querySelector('.custom-cursor__cursor');
      const cursorInner = document.querySelector('.custom-cursor__cursor-two');
      const links = document.querySelectorAll('a');
  
      // Mouse move event
      document.addEventListener('mousemove', function (e) {
        const x = e.clientX;
        const y = e.clientY;
        cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
        cursorInner.style.left = `${x}px`;
        cursorInner.style.top = `${y}px`;
      });
  
      // Mouse down event
      document.addEventListener('mousedown', function () {
        cursor.classList.add('click');
        cursorInner.classList.add('custom-cursor__innerhover');
      });
  
      // Mouse up event
      document.addEventListener('mouseup', function () {
        cursor.classList.remove('click');
        cursorInner.classList.remove('custom-cursor__innerhover');
      });
  
      // Hover effect for links
      links.forEach(link => {
        link.addEventListener('mouseover', () => {
          cursor.classList.add('custom-cursor__hover');
        });
        link.addEventListener('mouseleave', () => {
          cursor.classList.remove('custom-cursor__hover');
        });
      });
    });
  })();
  