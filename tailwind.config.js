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
                // Primary color
                geistForeground: '#000',
                geistWhite: "#fff",

                // Error
                geistErrorLighter: '#f7d4d6',
                geistErrorLight: '#ff1a1a',
                geistError: '#e00',
                geistErrorDark: '#c50000',

                // Success
                geistSuccessLighter: '#d3e5ff',
                geistSuccessLight: '#3291ff',
                geistSuccess: '#0070f3',
                geistSuccessDark: '#0761d1',

                // Warning
                geistWarningLighter: '#ffefc',
                geistWarningLight: '#f7b955',
                geistWarning: '#f5a623',
                geistWarningDark: '#ab570a',

                // Violet
                geistVioletLighter: '#d8ccf1',
                geistVioletLight: '#8a63d2',
                geistViolet: '#7928ca',
                geistVioletDark: '#4c2889',

                // Cyan
                geistCyanLighter: '#aaffec',
                geistCyanLight: '#79ffe1',
                geistCyan: '#50e3c2',
                geistCyanDark: '#29bc9b',

                // Hightlight
                geistHightlightPurple: '#f81ce5',
                geistHightlightMagenta: '#eb367f',
                geistHightlightPink: '#ff0080',
                geistHightlightYellow: '#fff500',

                oranged: "#FF4500",
                vero: "#00e0d4",
                ivory: "#000",
                ivory2: "#F9F6EE",
                soft: "#E8E8E8",
                jeruk: "#FF5733",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                display: "BasementGrotesque-Display, sans serif",
                basement: "BasementGrotesque-Black, sans serif",
                montreal: "Neue-Montreal-Regular-400, sans-serif",
                space: "SpaceMono-Regular, serif",
                silkBold: "Silk-Bold, serif",
            },
            backgroundColor: "#000000",
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwindcss-plugins/pagination"),
    ],
};
