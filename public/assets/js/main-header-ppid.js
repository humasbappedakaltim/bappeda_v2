    // DROPDOWN //
    function closeDropdown(dropdownSelector, toggleSelector, chevronSelector) {
        const dropdown = document.querySelector(dropdownSelector);
        const toggle = document.querySelector(toggleSelector);
        const chevron = document.querySelector(chevronSelector);
    
        $(dropdown).collapse('hide');
        toggle.classList.remove('active');
        if (chevron) chevron.classList.remove('rotate');
    }
    
    function setupDropdowns(dropdownList) {
        const mainHeader = document.querySelector("#main-header");
    
        dropdownList.forEach(({ toggleSelector, dropdownSelector, chevronSelector }) => {
            const toggle = document.querySelector(toggleSelector);
            const dropdown = document.querySelector(dropdownSelector);
            const chevron = document.querySelector(chevronSelector);
    
            if (!dropdown.dataset.eventAttached) {
                dropdown.dataset.eventAttached = true;
    
                $(dropdown).on('shown.bs.collapse', () => {
                    toggle.classList.add('active');
                    if (chevron) chevron.classList.add('rotate');
                    if (mainHeader && !mainHeader.classList.contains('dropdown-active')) {
                        mainHeader.classList.add('dropdown-active');
                    }
                });
    
                $(dropdown).on('hidden.bs.collapse', () => {
                    toggle.classList.remove('active');
                    if (chevron) chevron.classList.remove('rotate');
    
                    const anyDropdownOpen = dropdownList.some(({ dropdownSelector }) =>
                        document.querySelector(dropdownSelector).classList.contains('show')
                    );
                    if (!anyDropdownOpen && mainHeader.classList.contains('dropdown-active')) {
                        mainHeader.classList.remove('dropdown-active');
                    }
                });
            }
    
            toggle.addEventListener("click", () => {
                dropdownList.forEach(({ dropdownSelector: otherDropdown, toggleSelector: otherToggle, chevronSelector: otherChevron }) => {
                    if (dropdownSelector !== otherDropdown) {
                        closeDropdown(otherDropdown, otherToggle, otherChevron);
                    }
                });
            });
        });
    }
    
    const dropdownList = [
    
        {
            toggleSelector: "#tentang-ppid-dropdown-toggle",
            dropdownSelector: "#tentang-ppid-dropdown",
            chevronSelector: "#tentang-ppid-dropdown-toggle .icon-chevron-down"
        },
        {
            toggleSelector: "#standar-layanan-dropdown-toggle",
            dropdownSelector: "#standar-layanan-dropdown",
            chevronSelector: "#standar-layanan-dropdown-toggle .icon-chevron-down"
        },
        {
            toggleSelector: "#laporan-dropdown-toggle",
            dropdownSelector: "#laporan-dropdown",
            chevronSelector: "#laporan-dropdown-toggle .icon-chevron-down"
        },
        {
            toggleSelector: "#informasi-publik-dropdown-toggle",
            dropdownSelector: "#informasi-publik-dropdown",
            chevronSelector: "#informasi-publik-dropdown-toggle .icon-chevron-down"
        },
    ];
    
    setupDropdowns(dropdownList);
    // DROPDOWN END// 
