import { createViteConfig } from "vite-config-factory";

const entries = {
	"css/modularity-contact-banner":
		"./source/sass/modularity-contact-banner.scss",
};

export default createViteConfig(entries, {
	outDir: "assets/dist",
	manifestFile: "manifest.json",
});
