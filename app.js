import { Octokit } from "https://esm.sh/octokit"

const octokit = new Octokit ({})

octokit.rest.repos
    .get({
        owner:'Cacahuetedu62',
        repo:'HTML-CSS',
    })
    .then(({ data }) => {
        console.log(data.url)
    })