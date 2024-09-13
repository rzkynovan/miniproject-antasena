import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["neue-regular", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: "#faf6fe",
                    100: "#f3ebfc",
                    200: "#e9dbf9",
                    300: "#d8bff3",
                    400: "#c095eb",
                    500: "#a76ddf",
                    600: "#934ecf",
                    700: "#833ebe",
                    800: "#693594",
                    900: "#562c77",
                    950: "#391556",
                },
            },
        },
    },

    plugins: [forms],
};
