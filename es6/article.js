//module
export function remove() {
	//alert('remove');//il faut qu'il affiche le data-id de l'article
	//event currentTarget data-set
	fetch(url)
		.then(checkStatus)
		.then(parseJSON)
		.then(function(body) {
			console.log('report succeded with reponse', body)
		})/*,
		catch(function(error) {
			console.log('request failed', error)
		})*/
	;
}

function checkStatus(response) {
  if (response.status >= 200 && response.status < 300) {
    return response
  } else {
    var error = new Error(response.statusText)
    error.response = response
    throw error
  }
}

function parseJSON(response) {
  return response.json()
}