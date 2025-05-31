const DEFAULTS = {
    textSize: "normal",
    focusBox: false,
    highlightParagraphsColor: "white",
    colorFilter: "white",
};

export function getPreferences() {
    const localStoragePrefs = localStorage.getItem("accessibility_prefs");
    let cookiePrefs = null;
    const cookieMatch = document.cookie.match(/accessibility_prefs=([^;]+)/);
    if (cookieMatch) {
        try {
            cookiePrefs = JSON.parse(decodeURIComponent(cookieMatch[1]));
        } catch (e) {
            console.warn("Invalid cookie preferences format");
        }
    }
    // Merge with defaults
    try {
        const prefs = localStoragePrefs
            ? JSON.parse(localStoragePrefs)
            : cookiePrefs || {};
        return { ...DEFAULTS, ...prefs };
    } catch (e) {
        console.warn("Invalid preferences format, using defaults");
        return DEFAULTS;
    }
}

export function updatePreferences(newPrefs) {
    const currentPrefs = getPreferences();
    const updatedPrefs = {
        ...currentPrefs,
        ...newPrefs,
        textSize: newPrefs.textSize,
        highlightParagraphsColor: newPrefs.highlightParagraphsColor,
        colorFilter: newPrefs.colorFilter,
    };

    // Store in localStorage
    localStorage.setItem("accessibility_prefs", JSON.stringify(updatedPrefs));

    // Store in cookie with proper encoding
    const cookieValue = encodeURIComponent(JSON.stringify(updatedPrefs));
    document.cookie = `accessibility_prefs=${cookieValue}; path=/; max-age=${60 * 60 * 24 * 365 * 2}; SameSite=Lax${location.protocol === "https:" ? "; Secure" : ""}`;

    return updatedPrefs;
}
