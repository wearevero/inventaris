const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        pagination: (theme) => ({
            linkFirst: "mr-6",
            color: theme("colors.oranged"),
        }),
        extend: {
            animation: {
                marquee: "marquee 45s linear infinite",
                marquee2: "marquee2 45s linear infinite",
                kartu: "all 3s ease-in-out",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-50%)" },
                },
                marquee2: {
                    "0%": { transform: "translateX(-50%)" },
                    "100%": { transform: "translateX(0%)" },
                },
            },
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

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwindcss-plugins/pagination"),
    ],
};
