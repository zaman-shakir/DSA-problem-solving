<!-- src/routes/+page.svelte -->
<script>
	import { onMount } from 'svelte';

	//import homepage from '../contents/homepage.md';
    let blogContent = ''; // Initialize blogContent variable

	/*
        // Declare reactive variables at the top level of the component
        let attributes = {};
        let html = '';

        onMount(async () => {
            const response = await fetch(homepage);
            console.log("response");
            console.log(response);
            const text = await response.text();
            const { parsedAttributes, parsedHtml } = parseMarkdown(text); // Adjust variable names to avoid conflicts
            attributes = parsedAttributes; // Assign values without the $ prefix
            html = parsedHtml; // Assign values without the $ prefix
            console.log(attributes);
        });

        // Function to parse Markdown content
        function parseMarkdown(text) {
            // You need to implement parsing logic here
            // This could involve using a Markdown parser library or custom parsing logic
            // For simplicity, let's assume your Markdown has a specific format and you can parse it directly
            const lines = text.split('\n');
            let title = '';
            // Assuming the first line contains the title
            if (lines.length > 0) {
                title = lines[0].trim();
            }
            return {
                parsedAttributes: { title },
                parsedHtml: text // For simplicity, just use the entire Markdown text as HTML
            };
        }
    */

	let attributes = {};
	let html = '';

	onMount(async () => {
        const params = new URLSearchParams(window.location.search);
        const blogParam = params.get('blog');

    // Use the value of 'blogParam' to dynamically import the corresponding content
        if (blogParam) {
            try {
                // Dynamically import content based on the 'blog' parameter value
                const blogModule = await import(`../contents/${blogParam}.md`);
                blogContent = blogModule.default; // Assign the imported content to blogContent
                const response = await fetch(blogModule);
                const text = await response.text();
                const { parsedAttributes, parsedHtml } = parseMarkdown(text);
                attributes = parsedAttributes;
                html = parsedHtml;
                console.log(attributes);
            } catch (error) {
                console.error('Error importing blog content:', error);
            }
        }

	});

	function parseMarkdown(text) {
		const frontMatterRegex = /^---\r?\n([\s\S]+?)\r?\n---\r?\n([\s\S]*)$/;
		const matches = text.match(frontMatterRegex);
		let parsedAttributes = {};
		let parsedHtml = '';

		if (matches && matches.length === 3) {
			const frontMatter = matches[1];
			parsedHtml = matches[2];

			// Parse YAML front matter attributes
			parsedAttributes = parseYamlFrontMatter(frontMatter);
		} else {
			// If no front matter found, consider the entire text as content
			parsedHtml = text;
		}

		return {
			parsedAttributes,
			parsedHtml
		};
	}

	function parseYamlFrontMatter(frontMatter) {
		const attributeLines = frontMatter.split('\n');
		const attributes = {};

		attributeLines.forEach((line) => {
			// Ignore empty lines and lines that don't contain a colon
			if (line.trim() && line.includes(':')) {
				const [key, value] = line.split(':').map((part) => part.trim());
				attributes[key] = value;
			}
		});

		return attributes;
	}

	import Header from '../components/Header.svelte';
	import Footer from '../components/Footer.svelte';
	import animation from '../components/lottie.json';
	// import VideoPlayer from 'svelte-video-player';
</script>

<Header />

<div
	class="container-fluid first-section"
	style="display: flex;
    flex-direction: row;
    justify-content: center;"
>
	<div class="row container" style="margin-top:100px;padding-bottom:216px; width: 1116px;">

		<div class="col-12">
			<div class="col-12">
				Title : {attributes.title}
			</div>
			<div class="col-12">
				Description : {attributes.description}
			</div>

		</div>
	</div>
</div>


<Footer />

<style>
	.width100 {
		width: 100%;
	}
	.first-section {
		background-image: url('https://newtriplea.wpengine.com/wp-content/uploads/2023/08/Frame-2610578.svg');
		background-position: center center;
		background-size: cover;
	}

	.second-section {
		background-image: url('https://triple-a.io/wp-content/uploads/2023/09/Frame-2610813.png');
		/* background-position: center center; */
		background-size: cover;
		margin-top: -180px;
	}
	.third-section {
		background-image: url('https://triple-a.io/wp-content/uploads/2023/08/Group-628202.svg');
		/* background-position: center center; */
		background-size: cover;
		margin-top: -180px;
	}
	.fourth-section {
		background-color: #161141;
	}
	.fifth-section {
		background-image: url('https://triple-a.io/wp-content/uploads/2023/08/Group-628202.svg');
		background-position: center center;
		background-size: cover;
	}
	.video-row {
		display: flex;
		flex-direction: row;
		align-items: center;
	}
	.nav-item {
		width: 50%;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.nav-item button {
		color: #7e7e7e;
		border-color: transparent;
		background-color: transparent;
		font-weight: 400;
		font-size: 24px;
	}
	.nav-link.active {
		font-weight: 500;
		color: #fff;
	}
	.sec4-btn button {
		width: fit-content;
		background-color: transparent;
		color: #fff;
		border-radius: 150px;
		border: solid 1px #fff;
		padding-top: 8px;
		padding-bottom: 8px;
		padding-left: 16px;
		padding-right: 16px;
		margin-bottom: 30px;
	}
</style>
