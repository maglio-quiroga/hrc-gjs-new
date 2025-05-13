const ALLOWED_TEXT_SIZES = ["xsmall", "small", "normal", "large", "xlarge"];
const ALLOWED_COLOR_FILTERS = ["Amarillo", "Azul", "Blanco", "Negro"];

const DEFAULTS = {
    textSize: "normal",
    focusBox: false,
    highlightParagraphs: false,
    colorFilter: "Blanco",
};

export function getPreferences() {
    const prefsJson =
        localStorage.getItem("accessibility_prefs") ||
        document.cookie.match(/accessibility_prefs=([^;]+)/)?.[1];
    try {
        const prefs = prefsJson ? JSON.parse(prefsJson) : {};
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
        textSize: ALLOWED_TEXT_SIZES.includes(newPrefs.textSize)
            ? newPrefs.textSize
            : currentPrefs.textSize,
        focusBox:
            typeof newPrefs.focusBox === "boolean"
                ? newPrefs.focusBox
                : currentPrefs.focusBox,
        highlightParagraphs:
            typeof newPrefs.highlightParagraphs === "boolean"
                ? newPrefs.highlightParagraphs
                : currentPrefs.highlightParagraphs,
        colorFilter: ALLOWED_COLOR_FILTERS.includes(newPrefs.colorFilter)
            ? newPrefs.colorFilter
            : currentPrefs.colorFilter,
    };

    // Store in localStorage (preferred) and cookie (fallback)
    localStorage.setItem("accessibility_prefs", JSON.stringify(updatedPrefs));
    document.cookie = `accessibility_prefs=${JSON.stringify(updatedPrefs)}; path=/; max-age=${60 * 60 * 24 * 365 * 2}; SameSite=Lax${location.protocol === "https:" ? "; Secure" : ""}`;

    return updatedPrefs;
}

// Initialize with defaults if no preferences exist
if (
    !localStorage.getItem("accessibility_prefs") &&
    !document.cookie.includes("accessibility_prefs=")
) {
    localStorage.setItem("accessibility_prefs", JSON.stringify(DEFAULTS));
}
