/* global fetch */
export const handler = async (event) => {

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
        //return result;

        // Save the access token in a variable
        const accessToken = result.access_token;
        console.log('Access Token:', accessToken);

        // Second request
        const paymentUrl = 'https://api.triple-a.io/api/v2/payment';
        const paymentData = {
            type: 'widget',
            merchant_key: 'mkey-cltx5fwir01jp8tisbjhb4ebw',
            order_currency: 'USD',
            order_amount: '10',
            notify_email: '1a2d24e8-1594-4569-bc35-079049e4d805@email.webhook.site',
            notify_url: 'https://webhook.site/1a2d24e8-1594-4569-bc35-079049e4d805',
            notify_secret: 'Cf9mx4nAvRuy5vwBY2FCtaKr',
            notify_txs: true,
            order_id: 'TSGA267KL',
            payer_id: 'TRE1787238200',
            payer_name: 'Alice Tan',
            payer_email: 'alice.tan@triple-a.io',
            payer_phone: '+6591234567',
            payer_address: '1 Parliament Place, Singapore 178880',
            payer_poi: 'https://icatcare.org/app/uploads/2018/07/Thinking-of-getting-a-cat.png',
            payer_ip: '203.116.172.50',
            success_url: 'https://www.success.io/success.html',
            cancel_url: 'https://www.failure.io/cancel.html',
            cart: {
                items: [
                    {
                        sku: 'ABC8279289',
                        label: 'A tale of 2 cities',
                        quantity: 10,
                        amount: 7
                    }
                ],
                shipping_cost: 2,
                shipping_discount: 1,
                tax_cost: 2
            },
            webhook_data: {
                order_id: 'ABC12345-12'
            },
            sub_merchant: {
                id: '25',
                name: 'Test Payer',
                phone_number: '+6591234467',
                email: 'testpayer@gmail.com'
            }
        };
        //comment 1

        //let token = "Bearer "+accessToken;
        const token = `Bearer ${accessToken}`;

        if(accessToken){
                    try {

            // return {paymentUrl,token};
            const paymentResponse = await fetch(paymentUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json, application/xml',
                    'Authorization': token,

                },
                //body: JSON.stringify(paymentData)
                  body: JSON.stringify({"type":"triplea","merchant_key":"mkey-ckfhqahxy04g6e4qs6t3f00nl","order_currency":"USD","order_amount":10,"notify_email":"1a2d24e8-1594-4569-bc35-079049e4d805@email.webhook.site","notify_url":"https://webhook.site/1a2d24e8-1594-4569-bc35-079049e4d805","notify_secret":"Cf9mx4nAvRuy5vwBY2FCtaKr","notify_txs":true,"order_id":"TSGA267KL","payer_id":"TRE1787238200","payer_name":"Alice Tan","payer_email":"alice.tan@triple-a.io","payer_phone":"+6591234567","payer_address":"1 Parliament Place, Singapore 178880","payer_poi":"https://icatcare.org/app/uploads/2018/07/Thinking-of-getting-a-cat.png","payer_ip":"203.116.172.50","success_url":"https://www.success.io/success.html","cancel_url":"https://www.failure.io/cancel.html","cart":{"items":[{"sku":"ABC8279289","label":"A tale of 2 cities","quantity":10,"amount":7}],"shipping_cost":2,"shipping_discount":1,"tax_cost":2},"webhook_data":{"order_id":"ABC12345-12"},"sub_merchant":{"id":"25","name":"Test Payer","phone_number":"+6591234467","email":"testpayer@gmail.com"}})

            }).catch(err=>{
                 return {message:"====2"};
            });
             return {message:"====3"};
            // const paymentResult = await paymentResponse.json();
            const paymentResult = {message:"Customr"};
            console.log('Payment Response:', paymentResult);
            return paymentResult;
        } catch (error) {
            // console.error('Error occurred while making payment:', error.message);
            return { error: error };
        }
        }


        //comment 2


    } catch (error) {
        console.error('Error occurred while fetching token:', error.message);
        return { error: 'Error occurred while fetching token' };
    }
};
