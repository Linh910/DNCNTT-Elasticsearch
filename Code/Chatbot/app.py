from flask import Flask, render_template, request, jsonify
from openai import OpenAI

client = OpenAI(api_key='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')


app = Flask(__name__)

# Set up OpenAI API credentials


# Define the default route to return the index.html file
@app.route("/")
def index():
    return render_template("index.html")

# Define the /api route to handle POST requests


@app.route("/api", methods=["POST"])
def api():
    # Get the message from the POST request
    message = request.json.get("message")
    # Send the message to OpenAI's API and receive the response

    completion = client.chat.completions.create(model="gpt-3.5-turbo",
                                                messages=[
                                                    {"role": "user",
                                                        "content": message}
                                                ])
    if completion.choices[0].message != None:
        return jsonify({"content": completion.choices[0].message.content})

    else:
        return 'Failed to Generate response!'


if __name__ == '__main__':
    app.run()
