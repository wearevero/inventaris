const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                oranged: "#FF4500",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                display: "BasementGrotesque-Display, sans serif",
                basement: "BasementGrotesque-Black, sans serif",
                montreal: "Neue-Montreal-Regular-400, sans-serif",
                space: "SpaceMono-Regular, serif",
            },
            backgroundColor: "#000000",
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
