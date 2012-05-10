Server
======

Der Server für unser Automatisches Lernen SEP

## Datenmodell

### Card

```javascript
{
  id: 123,
  creatorID: *user*,
  question: "Was ist das hier?",
  response: "Das ist ganz toll",
  createdAt: DateTime,
  updatedAt: DateTime,
  isBad: true/false
}
```

### Card_Votes

```javascript
{
  cardID: 123,
  userID: 123,
  vote: 1/-1,
  createdAt: DateTime,
  updatedAt: DateTime
}

```

### Card_Answer

```javascript
{
  cardID: 123,
  userID: 123,
  correct: true/false
  answeredAt: DateTime
}
```
### Class

```javascript
{
  id: 123,
  creatorID: *user*,
  name: "Vorlesung XYZ",
  createdAt: DateTime,
  updatedAt: DateTime
}
```

### Class_Card

```javascript
{
  classID: 123,
  cardID: 123
}
```

### Folder

```javascript
{
  id: 123,
  name: "Vorlesung XYZ",
  userID: 123,
  createdAt: DateTime,
  updatedAt: DateTime
}

```

### Class_Folder

```javascript
{
  classID: 123,
  folderID: 123
}

```
### User

```javascript
{
  id: 123,
  email: "foo@tu-bs.de",
  password: *password hash*,
  firstname: "",
  lastname: "",
  isAdmin: true/false,
  createdAt: DateTime
  updatedAt: DateTime
  lastLoginAt: DateTime
}
```

