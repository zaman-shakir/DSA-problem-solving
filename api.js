async function getToken() {
    const url = 'https://api.triple-a.io/api/v2/oauth/token';
    const data = new URLSearchParams({
        'client_id': 'oacid-cltx5joew01stb2is3l9ofnjk',
        'client_secret': '90d268dcaf4f45d687f47fb3483daab7f5bb9c79b305abc38b655e18a108db5e',
        'grant_type': 'client_credentials'
    });

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer 123',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: data
        });

        if (!response.ok) {
            throw new Error('Failed to retrieve token');
        }

        const result = await response.json();
        console.log(result);
        return result;
    } catch (error) {
        console.error('Error occurred while fetching token:', error.message);
        return { error: 'Error occurred while fetching token' };
    }
}

// Call the function to get the token
getToken();
