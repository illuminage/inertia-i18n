import { defineConfig } from "vitest/config";
import react from "@vitejs/plugin-react";
import dts from "vite-plugin-dts";
import { resolve } from "path";

export default defineConfig({
    plugins: [
        react(),
        dts({
            insertTypesEntry: true,
        }),
    ],
    build: {
        lib: {
            entry: resolve(__dirname, "src/index.ts"),
            formats: ["es", "cjs"],
        },
        rollupOptions: {
            external: ["react", "react-dom"],
        },
    },
    test: {
        globals: true,
        environment: "jsdom",
        setupFiles: resolve(__dirname, "tests/setup.ts"),
    },
});
